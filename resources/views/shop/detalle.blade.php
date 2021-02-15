@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="bg-white mt-5">
        <h1 class=""> Detalle compra ID: {{$ventas->id}}</h1>
        <a class="btn btn-primary" href="{{url()->previous()}}">Volver</a>
    </div>
    <div class="row  justify-content-center mt-5">
            <div class="col-sm-10">  
                <div class="table-responsive">
                    <table class="table" id="ventas-table">
                        <thead>
                            <tr>
                                <th>@lang('models/productos.fields.descripcion')</th>
                                <th>@lang('models/detalleVentas.fields.precio')</th>
                                <th>@lang('models/detalleVentas.fields.cantidad')</th>
                                <th>@lang('models/detalleVentas.fields.subtotal')</th>
                                <th colspan="3">@lang('crud.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ventas->detalle as $item)
                            <tr>
                            <td>{{ $item->producto->descripcion }}</td>
                            <td>{{ $item->precio }}</td>
                            <td>{{ $item->cantidad }}</td>
                            <td>{{ $item->subtotal }}</td>
                                <td width="120">
                                    <div class='btn-group'>
                                        <a href="{{ route('detalleproducto', [$item->product_id]) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-eye"> Ver</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection
