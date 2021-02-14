@extends('layouts.cliente')

@section('content')
<div class="container">
    @include('flash::message')

    <div class="row">
      <div class="col-3"></div>
      <img src="{{$producto->foto}}" class="col-4" style="max-width:20%; height: auto"  alt="">
      <div class="col-2">
        <p class="mt-5 font-weight-bold">{{$producto->descripcion}}</p>
        <p class="mt-2 float-right">Precio: S/. {{$producto->precio}}</p>
      </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center" style="margin-top: 25px">
          <a href="{{route('review')}}" class="btn btn-outline-primary">Carrito</a>
            <a href="{{route('listarproductos')}}" class="btn btn-outline-primary">Seguir comprando</a>
        </div>           
    </div>
</div>
@endsection 