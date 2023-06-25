@extends('layouts.index')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<header class="p-1 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-lg-0 link-body-emphasis text-decoration-none">
            <img src="./imagen/logopagina.jpg" alt="" class="rounded-circle" width="56" height="56">
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-body-emphasis"><i class="fa-solid fa-house"></i>&nbsp;Inicio</a></li>
          
          <li><a href="https://github.com/carlosjose1267/carlosjoseapplaravel" class="nav-link px-2 link-body-emphasis"><i class="fa-solid fa-file-code"></i>&nbsp; Documentación-GitHub</a></li>
          
         
        </ul>


      </div>
    </div>
  </header>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($products as $producto)
        <div class="col">
          <div class="card shadow-sm">
            <img src="/imagen/{{$producto->imagen}}" class="bd-placeholder-img card-img-top" width="12%" height="25%">
            <div class="card-body">
            <h5 class="card-text">{{$producto->nombre}}</h5>
              <small class="card-text">{{$producto->descripcion}}</small>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group mt-2">
                    <a href="{{route ('paypal', $producto->id )}}"
                        class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i>&nbsp; Comprar</a>
                </div>
                <p class="text-body-secondary mt-3">{{$producto->precio}}€</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{$products->links()}}

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
