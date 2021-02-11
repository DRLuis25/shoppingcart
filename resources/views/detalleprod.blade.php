@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-4 bg-white ">
        <h1> Menú principal</h1>
    </div>
    <div class="row  justify-content-center ">
        <div class="col-sm-6 justify-content-center" style="">
            <div class="card justify-content-center" style="margin-top: 80px">
                <img src="..\luffy.png" class="card-img-top" alt="...">
            </div>
  
        </div>
        <div class="col-sm-6 justify-content-center" style="margin-top: 80px">
            <p><b>Zapatos de color Negro marca Adidas</b></p>
            <p>Precio:</p>
            <p>$25</p><br>
            <p>¿Cuanto de este artículos deseas comprar?</p>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                     <input class="form-control" type="number" id="" name="">   
                </div>
            <div>
            <button type="button" class="btn btn-outline-primary" >Agregar al carrito</button>
            </div>
        </div>
    </div>
</div>
@endsection
