@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-6 bg-white mt-5 text-center">
        <h1> Mis Órdenes de compra</h1>
    </div>
    <div class="row  justify-content-center mt-5">
        @if (count($ordenes))
            <div class="col-sm-10">  
                <div class="table-responsive">
                    <table class="table" id="ventas-table">
                        <thead>
                            <tr>
                                <th>@lang('models/ventas.fields.id') Venta</th>
                                <th>@lang('models/ventas.fields.direccion')</th>
                                <th>@lang('models/ventas.fields.subtotal')</th>
                                <th>@lang('models/ventas.fields.total')</th>
                                <th>@lang('models/ventas.fields.estado')</th>
                                 <th colspan="3">@lang('crud.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ordenes as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->subtotal }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                @if ($item->estado=='0')
                                    {{'Abierta'}}
                                @elseif($item->estado=='1')
                                    {{'Cerrada'}}
                                @else
                                    {{'Cancelada'}}
                                @endif
                            </td>
                                <td width="120">
                                    <div class='btn-group btn-group-xs'>
                                        <a href="{{ route('ventas.ver', [$item->id]) }}" class='btn btn-default btn-xs'>
                                            <i class="far fa-eye"></i>
                                        </a>
                                        {{--<a href="{{ route('ventas.anular', [$item->id]) }}" class='btn btn-danger btn-xs'>
                                        <i class="fa fa-ban">Anular</i>
                                        </a>
                                         {!! Form::open(['route' => ['ventas.destroy', $ventas->id], 'method' => 'delete']) !!}
                                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                                        {!! Form::close() !!} --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center m-0" role="alert">
                @lang('ordenes.vacio')
            </div>
        @endif
    </div>
</div>
@endsection
