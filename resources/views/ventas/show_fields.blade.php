<!-- Cliente Id Field -->
<div class="col-sm-6">
    {!! Form::label('cliente_id', __('models/ventas.fields.cliente_id').':') !!}
    <p>{{ $ventas->cliente->last_name }}, {{$ventas->cliente->name}}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-6">
    {!! Form::label('direccion', __('models/ventas.fields.direccion').':') !!}
    <p>{{ $ventas->direccion }}</p>
</div>

<!-- Subtotal Field -->
<div class="col-sm-2">
    {!! Form::label('subtotal', __('models/ventas.fields.subtotal').':') !!}
    <p>{{ $ventas->subtotal }}</p>
</div>

<!-- Total Field -->
<div class="col-sm-2">
    {!! Form::label('total', __('models/ventas.fields.total').':') !!}
    <p>{{ $ventas->total }}</p>
</div>
<!-- Estado Field -->
<div class="col-sm-4">
    {!! Form::label('estado', __('models/ventas.fields.estado').':') !!}
    <p>@if ($ventas->estado=='0')
            {{'Abierto'}}
        @elseif($ventas->estado=='1')
            {{'Cerrado'}}
        @else
            {{'Cancelado'}}
        @endif
    </p>
</div>

@if ($ventas->envio!=null)
    <!-- Envio Field -->
    <div class="col-sm-3">
        {!! Form::label('envio', __('models/ventas.fields.envio').':') !!}
        <p>{{ $ventas->envio }}</p>
    </div>
@endif

@if ($ventas->otros!=null)
    <!-- Otros Field -->
    <div class="col-sm-3">
        {!! Form::label('otros', __('models/ventas.fields.otros').':') !!}
        <p>{{ $ventas->otros }}</p>
    </div>
@endif

<div class="col-12">
    <h3>Detalle Venta</h3>
</div>
<div class="container">
    <div class="table-responsive text-center">
        <table class="table" id="carrito-table">
            <thead>
                <tr>
                    <th>@lang('carrito.quantity')</th>
                    <th>@lang('carrito.articles')</th>
                    <th>@lang('carrito.unitprice')</th>
                    <th>@lang('carrito.importe')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas->detalle as $item)
                    <tr>
                        <td>{{ $item->cantidad }}</td>
                        <td>{{ $item->producto->descripcion }}</td>
                        <td>{{ $item->precio }}</td>
                        <td>{{ $item->subtotal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">                       
        <div class="col-md-8">
        </div>   
        <div class="col-md-2">                        
            <label for="">SubTotal : </label>    
            
        </div>   
        <div class="col-md-2">
            <input type="text" class="form-control text-right" readonly="readonly" value="{{$ventas->total}}">                              
        </div>   
    </div>
</div>