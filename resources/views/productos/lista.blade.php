
@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
<a class="btn btn-success mb-3" href="{{ url('/form')}}"><i class="fa solid fa-plus fa-lg"></i> Agregar nuevo producto</a>

<!-- Mensaje producto borrado -->
@if(session('productoBorrado'))
        <div class="alert alert-success">
            {{ session('productoBorrado')}}
        </div>
@endif
<!-- -->
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Link de descarga</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                       <!-- <th>Paypal</th> -->
                    </tr>
                </thead>

                <tbody>
                    @foreach($productsadmin as $producto)
                    <tr>
                        <td>
                            <img src="/imagen/{{$producto->imagen}}" width="150px"></td>
                        <td class="align-middle">{{$producto->nombre}}</td>
                        <td class="align-middle">{{$producto->descripcion}}</td>
                        <td class="align-middle">{{$producto->precio}}</td>
                        <td class="align-middle">{{$producto->descarga}}</td>
                        <td class="align-middle">
                           
                            <a href="{{route ('editform', $producto->id )}}"
                            class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <td class="align-middle">
                            <form action="{{route('delete', $producto->id)}}" method="POST">
                                @csrf @method('DELETE')

                                <button type="submit" onclick="return confirm('¿Quieres borrar el producto?')"
                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            
                        </td>
                        <!-- 
                        <td class="align-middle"><a href="{ {route ('paypal', $producto->id )}}"
                            class="btn btn-primary"></i>Comprar producto</a>
                        </td> -->

                    </tr>
                    @endforeach
                </tbody>


            </table>
            <br>
            {{$productsadmin->links()}}

        </div>



    </div>

</div>
<footer class="text-body-secondary py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#" class="btn"><i class="fa-solid fa-arrow-left-long fa-rotate-90"></i> Volver al top</a>
      </p>
      <p class="mb-1">La aplicacion hecha por &copy; Carlos Jose</p>
    </div>
  </footer>
@endsection
