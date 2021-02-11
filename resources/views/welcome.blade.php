@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-4 bg-white ">
        <h1> Menú principal</h1>
    </div>
    <div class="row  justify-content-center ">
        <div class="col-sm-6" style="background-color:rgb(224, 209, 72)">
            <h2 style="text-align: center; font-family: fantasy;color: blue;margin-top: 130px">TIENDA VIRTUAL</h2>
            <h3 style="text-align: center; font-family: fantasy;color: rgb(123, 123, 189);margin-top: 30px">Seleccione la categoria que desee:</h3>
            <p style="text-align: center; font-family: fantasy;color: rgb(123, 123, 189);margin: 20px;font-size: 30px">Calzado</p>
            <p style="text-align: center; font-family: fantasy;color: rgb(123, 123, 189);margin: 20px;font-size: 30px">Vestido</p>
            <p style="text-align: center; font-family: fantasy;color: rgb(123, 123, 189);margin: 20px;font-size: 30px">Camisa</p>
            <p style="text-align: center; font-family: fantasy;color: rgb(123, 123, 189);margin: 20px;font-size: 30px">Pnatalones</p>        
        </div>


        <div class="col-sm-6 justify-content-center" style="background-color:rgb(146, 60, 49)" >
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
