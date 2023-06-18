<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{

    public function main(){
        $datosmain['products'] = Producto::paginate(12);

        return view('productos.main', $datosmain);
    }
     
    // listado de productos
    public function list(){
        $datos['productsadmin'] = Producto::paginate(12);

        return view('productos.lista', $datos);
    }

    // Formulario del producto
    public function productoform(){
        return view('productos.productoform');
    }

    //Guardar el productoform
    public function save(Request $request){
        // validar formularios
        /* agregamos los campos del formulario y le agregamos parametros
           unique para que sea unico, seguido del nombre de la tabla de la db     */
        $validator = $this->validate($request, [
            'nombre'=> 'required|string|max:40|unique:productos',
            'precio'=> 'required|string|max:5',
            'descripcion'=> 'required|string|max:200',
            'imagen'=> 'required|image|mimes:jpeg,jpg,png',
            'descarga'=> 'required|string|max:200'
        ]);
        // fin validar formularios

        /* Agregamos el producto que recogemos de los campos del formulario
        recogemos los valores y eceptuamos el token.
        Usamos el modelo para recoger los valores de la tabla y usamos
        la funcion de insertar */
        $productodata = request()->except('_token');
        
        // Codigo para agregar una imagen con ciertos parametros para guardar en la DB
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = "imagen/";
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            
             $imagen->move($rutaGuardarImg, $imagenProducto);
             $productodata['imagen'] = "$imagenProducto";
        }
        // Fin codigo para agregar imagen

        Producto::insert($productodata);

        return back()->with('mensajeProductoAñadido', 'El producto a sido agregado');
    }
// FUNCION EDITAR
    public function editform($id){
   
        $producto = Producto::findOrFail($id);

       
        return view('productos.editform', compact('producto'));
    }
    
// Edicion de los productos
    public function edit(Request $request, $id){
        $datosproducto = request()->except((['_token', '_method']));
        // Codigo para agregar una imagen con ciertos parametros para guardar en la DB
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = "imagen/";
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $datosproducto['imagen'] = "$imagenProducto";
        }else{
            unset($datosproducto['imagen']);
        }
        // Fin codigo para modificar la imagen
        Producto::where('id', '=', $id)->update($datosproducto);

        return back()->with('productoModificado', 'El producto a sido modificado');
        
    }
//


    // Borrar una lista de un producto 
    public function delete($id){


        Producto::destroy($id);

        return back()->with('productoBorrado', 'El producto ha sido eliminado');
    }

    public function paypal($id){

        $producto = Producto::findOrFail($id);

        return view('productos.paypal', compact('producto'));
    }





}
