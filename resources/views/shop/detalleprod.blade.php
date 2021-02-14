@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-4 bg-white mt-4">
        <h1> Menú principal</h1>
    </div>
    <div class="row  justify-content-center mt-5">
        <div class="col-sm-6 justify-content-center" style="">
            <div class="card justify-content-center">
                <img src="..\luffy.png" class="card-img-top" alt="...">
            </div>
  
        </div>
            <div class="col-sm-6 justify-content-center">
                <form action="{{route('agregarproducto',['id' => $producto->id])}}" method="get">
                    @csrf
                    <p><b>{{$producto->descripcion}}</b></p>
                    {{-- {!! Form::hidden('id', $producto->id) !!} --}}
                    <p>Precio:</p>
                    <p>S/. {{$producto->precio}}</p><br>
                    <p>¿Cuanto de este artículos deseas comprar?</p>
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <input class="form-control" type="number" id="cantidad" name="cantidad" max="{{$producto->stock}}" min="1" required value="1">   
                        </div>
                        {{--If logeado añadir, sino login--}}
                        @if (Auth::check())
                            <button class="btn btn-primary">Añadir al carrito</button>
                        @else
                            <a href="{{route('signin')}}" class="btn btn-primary">Añadir al carrito (No logeado)</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
