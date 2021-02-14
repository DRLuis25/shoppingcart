@extends('layouts.cliente')

@section('content')
<div class="container mt-4">
    <div class="col bg-white ">
        <h1>Carrito de compras</h1>
    </div>
    @include('flash::message')
    <div class="row justify-content-center ">
        
        <div class="col-sm-12 justify-content-center mx-auto text-center" style="">
            <p style="font-family: fantasy;margin-top: 10px; font-size: 20px "></p>
            @if (count(Cart::content()))
            <div>
                @include('shop.carrito')
                <div class="mx-auto text-center" style="margin: 20px">
                    <a href="{{route('vaciarcarrito')}}" class="btn btn-outline-primary">Vaciar carrito</a>
                    <a href="{{route('revision')}}" class="btn btn-primary">Proceder con el pago</a>
                </div>
            </div>
            @else
                <div class="alert alert-info text-center m-0" role="alert">
                    @lang('carrito.vacio')
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
