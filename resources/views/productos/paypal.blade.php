@extends('layouts.index')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AT3sCq_151stlAqShcSHr5o4ySQdYQxKuaQddHxSSevisfFjVjKzc6NJ1vED-wJ5BHwmmkqY34ezwJw2&currency=EUR&disable-funding=credit,card,sofort"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<header class="p-1 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-lg-0 link-body-emphasis text-decoration-none">
            
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-body-emphasis"><i class="fa-solid fa-house"></i>&nbsp;Inicio</a></li>
          
          <li><a href="#" class="nav-link px-2 link-body-emphasis"><i class="fa-solid fa-file-code"></i>&nbsp; Documentación-GitHub</a></li>
          
          <li><a href="#" class="nav-link px-2 link-body-emphasis"><i class="fa-solid fa-file-lines"></i>&nbsp; DockerHub</a></li>
        </ul>
      </div>
    </div>
  </header>


<div class="container">
  <div class="d-flex justify-content-center">
    <div class="d-flex justify-content-center">
      <div class="album py-5">
        <div class="container">
        
              <div class="card shadow-sm">
                <img src="/imagen/{{$producto->imagen}}" class="bd-placeholder-img card-img-top" width="12%" height="25%">
                <div class="card-body">
                <h5 class="card-text">{{$producto->nombre}}</h5>
                  <small class="card-text">{{$producto->descripcion}}</small>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group mt-2">
                      <a class="btn" href="{{ url ('/')}}">Volver</a>
                      <div class="paypalboton">
                      </div>
                    </div>
                    <p class="text-body-secondary mt-3">{{$producto->precio}}€</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
    </div>
</div>
<!-- SCRIPT DE PAYPAL-->
<script>
    paypal.Buttons({
      style:{
        color: 'blue',
        shape: 'pill',
      },
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '{{ $producto->precio }}' 
            }
          }]
        });
      },
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          alert(`Transaction ${transaction.status}: ${transaction.id}\n\nLa compra a sido existosa`);
          actions.redirect('https://drive.google.com/uc?export=download&id={{$producto->descarga}}'); 
        });
      }
    }).render('.paypalboton');
  </script>




<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" class="btn"><i class="fa-solid fa-arrow-left-long fa-rotate-90"></i> Volver al top</a>
    </p>
    <p class="mb-1">La aplicacion hecha por &copy; Carlos Jose</p>
  </div>
</footer>
  @endsection
   
