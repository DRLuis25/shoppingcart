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
                
                <form action="{{route('agregarproducto',['id'=>$producto->id])}}" method="get">
                    @csrf
                    <p><b>{{$producto->descripcion}}</b></p>
                    <p>Precio:</p>
                    <p>S/. {{$producto->precio}}</p><br>
                    <p>¿Cuanto de este artículos deseas comprar?</p>
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <input class="form-control" type="number" id="" name="" max="{{$producto->stock}}" min="1" required value="1">   
                        </div>
                    <div>
                        <input type="submit" class="btn btn-outline-primary" >
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
