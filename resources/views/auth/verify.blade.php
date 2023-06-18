@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu dirección de correo electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificacion a sido enviado a su dirección de correo electronico') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifica el link de la dirección de correo electronico.') }}
                    {{ __('¿No has recibido el correo?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Presiona aqui para otra consulta') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
