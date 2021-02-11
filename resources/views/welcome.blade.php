@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-4">
        <h1> Menú principal</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6 text-center" style="margin-top: 250px">
            <h2 >TIENDA VIRTUAL</h2>
            <br>
            <br>
            <a href="{{route('listarproductos')}}" class="btn btn-outline-primary">Ver productos</a>
        </div>


        <div class="col-sm-6 justify-content-center">
            <h2 style="font-family: fantasy ; text-align: center;margin-top: 130px">PRODUCTO</h2>
            
            <div class="card justify-content-center" style="margin: 10px">
                <img src="..\luffy.png" class="card-img-top" alt="...">
                <div class="card-body mx-auto text-center" >
                  <p class="card-text">Precio: 25$</p>
                    <button type="button" class="btn btn-outline-primary" >Agregar al carrito</button>
                </div>
              </div>


        </div>

           


    </div>
</div>
@endsection
