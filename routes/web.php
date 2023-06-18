<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('productos.lista');
});

*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// listar productos
//Route::get('/', [ProductController::class, 'list']);
Route::get('/', [ProductController::class, 'main']);
// admin route
Route::get('/admin', [ProductController::class, 'list'])->middleware('auth');
// ruta del controlador formulario para agregar productos
Route::get('/form', [ProductController::class, 'productoform'])->middleware('auth');
// guardar los productos
Route::post('/save', [ProductController::class, 'save'])->middleware('auth')->name('save');
// Eliminar los productos
Route::delete('/delete/{id}', [ProductController::class, 'delete'])->middleware('auth')->name('delete');
// Ruta para editar el formulario
Route::get('/editform/{id}', [ProductController::class, 'editform'])->middleware('auth')->name('editform');
// Ruta para editar el producto
Route::patch('/edit/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('edit');
//
Route::get('/paypal/{id}', [ProductController::class, 'paypal'])->name('paypal');
//

