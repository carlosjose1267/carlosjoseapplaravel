@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
    <!-- Mensaje existo del producto agregado -->
        @if(session('mensajeProductoAñadido'))
            <div class="alert alert-success">
                {{ session('mensajeProductoAñadido')}}
            </div>
            @endif
    <!-- -->
        <div class="col-md-7 mt-5">
            <!-- Errores de formulario de los productos agregados -->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Fin errores de formulario -->
            <div class="card">
            <form action="{{ route('save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header text-center">Agregar nuevo Producto</div>

                    <div class="card-body">
                        <div class="row form-group mb-3">
                           
                            <input type="text" name="nombre" class="form-control col-md-9" placeholder="Nombre">
                        </div>

                        <div class="row form-group mb-3">
                           
                            <input type="text" name="precio" class="form-control col-md-9" placeholder="Precio">
                        </div>

                        <div class="row form-group mb-3">
                            
                            <input type="text" name="descripcion" class="form-control col-md-9" placeholder="Descripcion">
                        </div>

                        <div class="row form-group mb-3">
                            
                            <input type="file" name="imagen" class="form-control col-md-9">
                        </div>

                        <div class="row form-group mb-3">
                            
                            <input type="text" name="descarga" class="form-control col-md-9" placeholder="Enlace de descarga">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar cambios</button>
                            <a class="btn btn-success mt-3 col-md-9 offset-2" href="{{ url ('/admin')}}">Volver a la lista de prodcutos</a>
                        </div>
                    </div>
                </div>

            </form>    
            </div>
        </div>
        
    </div>
    

</div>
@endsection