@extends('layouts.cliente')



@section('content')
<div class="container mt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h2>Revisión final de la orden</h2>
                </div>
            </div>
        </div>
    </section>
    @include('flash::message')
    @if (count(Cart::content()))
        <div class="content px-3">
        
            @include('adminlte-templates::common.errors')
        
            <div class="card">
                <form id="procesar-pedido" action="{{ route('procesarpedido') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <p>Revise su orden y verifique que sea correcta</p>
                        <div class="row">
                            <div class="container">
                                @include('shop.carrito')
                            </div>
                        </div>
                        <div class="">
                            <h4>Revisión de carga a la cuenta y entrega</h4>
                            <p>Revise que la información sea correcta</p>
                            <div class="container">
                                <div class="row">
                                    <div class="card col-6">
                                        <div class="card-body">
                                            <h5>Cargo a la cuenta</h5>
                                            Alberto xxx <br>   
                                            Unidad habitacional agua santa <br>
                                            Plaza bm2 edif. b16 dpto. 6 <br>
                                            puebla <br>
                                            puebla 72490 <br>
                                            mexico
                                        </div>
                                    </div>
                                    <div class="card col-6">
                                        <div class="card-body">
                                            <h5>Entregar a:</h5>
                                            Alberto xxx <br>   
                                            Unidad habitacional agua santa <br>
                                            Plaza bm2 edif. b16 dpto. 6 <br>
                                            puebla <br>
                                            puebla 72490 <br>
                                            mexico
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h3>Método de pago</h3>
                            @include('shop.pago')
                        <br>
                        <h3>Dirección de entrega</h3>
                        <div class="container row">
                            <div class="col-12">
                                <label for="direccion">
                                    <input type="radio" name="direccion" value="{{Auth::user()->direccion}}" required>
                                    {{Auth::user()->direccion}}
                                </label>
                            </div>
                            @if (Auth::user()->direccion2)
                                <div class="col-12">
                                    <label for="direccion">
                                        <input type="radio" name="direccion" value="{{Auth::user()->direccion2}}">
                                        {{Auth::user()->direccion2}}
                                    </label>
                                </div>
                            @endif
                        </div>
                    </div>
            
                    <div class="card-footer">
                        {{-- <a href="{{route('procesarpedido')}}">Continuar</a> --}}
                        {!! Form::submit(__('crud.continue'), ['class' => 'btn btn-primary']) !!}
                        <a href="{{ url()->previous() }}" class="btn btn-default">@lang('crud.back')</a>
                    </div>
                </form>
                @foreach (Cart::content() as $item)
                <form id="eliminar-prod{{$item->rowId}}" action="{{ route('eliminarproducto',$item->rowId) }}" method="POST" onsubmit="return confirm("'.__('crud.are_you_sure')">
                    @method('delete')
                    @csrf
                </form>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-info text-center m-0" role="alert">
            @lang('carrito.vacio')
        </div>
    @endif
</div>

@endsection
