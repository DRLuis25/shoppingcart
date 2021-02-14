@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-6 bg-white mt-5 text-center">
        <h1> Detalle producto</h1>
    </div>
    <div class="row  justify-content-center mt-5">
        <div class="col-sm-6 justify-content-center" style="">
            <div class="justify-content-center">
                <img src="{{$producto->foto}}" alt="imagenproducto"style="display: block;
                margin-left: auto;
                margin-right: auto;" width="250">
            </div>
  
        </div>
            <div class="col-sm-3 justify-content-center">
                <form action="{{route('agregarproducto',['id' => $producto->id])}}" method="get">
                    @csrf
                    <p class="text-center"><b>{{$producto->descripcion}}</b></p>
                    {{-- {!! Form::hidden('id', $producto->id) !!} --}}
                    <p>Precio:</p>
                    <p class="float-right">S/. {{$producto->precio}}</p><br>
                    <p>¿Cuanto de este artículos deseas comprar?</p>
                    <div class="form-row align-items-center justify-content-center">
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
