@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-6 mt-5 text-center">
        <h1> Menú principal</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-6 text-center" style="margin-top: 200px">
            <h2 >TIENDA VIRTUAL</h2>
            <br>
            <br>
            <a href="{{route('listarproductos')}}" class="btn btn-outline-primary">Ver productos</a>
        </div>


        <div class="col-sm-6 justify-content-center">
            <h2 style="font-family: fantasy ; text-align: center;margin-top: 80px">Recomendado</h2>
            
            <div class="card justify-content-center" style="margin: 10px">
                <img src="{{$random->foto}}" alt="fotoproducto" style="display: block;
                margin-left: auto;
                margin-right: auto;" width="250">
                <div class="card-body mx-auto text-center" >
                    <p class="card-text">Precio: S/. {{$random->precio}}</p>
                    <a href="{{route('detalleproducto',['id'=>$random->id])}}" class="btn btn-outline-primary">Ver detalles</a>
                </div>
              </div>


        </div>

           


    </div>
</div>
@endsection
