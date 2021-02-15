@extends('layouts.cliente')

@section('content')
<div class="container">
    @include('flash::message')
    <div class="col-sm-12 text-center">
        <h4>Estamos procesando su pedido</h4>
        <p>Esto puede tomar unos minutos</p>
        <img src="../pagoproceso.jpg" alt="">
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center" style="margin-top: 25px">
            <a href="{{route('listarproductos')}}" class="btn btn-outline-primary">Volver al listado</a>
            <a href="{{route('welcome')}}" class="btn btn-outline-primary">Ir al menú principal</a>
        </div>           
    </div>
</div>
@endsection 