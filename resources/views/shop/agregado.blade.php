@extends('layouts.cliente')

@section('content')
<div class="container">
    @include('flash::message')
    <div class="row">
        descripción producto agregado
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center" style="margin-top: 25px">
            <a href="{{route('review')}}" class="btn btn-outline-primary">Carrito</a>
            <a href="{{route('listarproductos')}}" class="btn btn-outline-primary">Seguir comprando</a>
        </div>           
    </div>
</div>
@endsection 