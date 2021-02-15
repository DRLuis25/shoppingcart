<!-- Cliente Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('cliente_id', __('models/ventas.fields.cliente_id').':') !!}
    <input type="text" name="cliente_id" value="{{$ventas->cliente->last_name}}, {{$ventas->cliente->name}}" class="form-control" disabled>
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('direccion', __('models/ventas.fields.direccion').':') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','disabled']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-1">
    {!! Form::label('subtotal', __('models/ventas.fields.subtotal').':') !!}
    <input type="text" name="subtotal" value="S/. {{$ventas->subtotal}}" disabled class="form-control">
</div>
@if ($ventas->envio!=null)
    <!-- Envio Field -->
    <div class="form-group col-sm-1">
        {!! Form::label('envio', __('models/ventas.fields.envio').':') !!}
        <input type="text" name="envio" value="S/. {{$ventas->envio}}" disabled class="form-control">
    </div>
@endif
@if ($ventas->otros!=null)
    <!-- Otros Field -->
    <div class="form-group col-sm-1">
        {!! Form::label('otros', __('models/ventas.fields.otros').':') !!}
        <input type="text" name="otros" value="S/. {{$ventas->otros}}" disabled class="form-control">
    </div>
@endif

<!-- Total Field -->
<div class="form-group col-sm-1">
    {!! Form::label('total', __('models/ventas.fields.total').':') !!}
    <input type="text" name="total" value="S/. {{$ventas->total}}" disabled class="form-control">
</div>

<!-- Estado Field -->
<div class="form-group col-sm-12">
    {!! Form::label('estado', __('models/ventas.fields.estado').':') !!}
    <select name="estado" id="estado" class="form-control col-2" required>
        <option value="">Seleccione una opción</option>
        @if ($ventas->estado=='0')
            <option value="0" selected>Abierto</option>
            <option value="1">Cerrado</option>
            <option value="2">Cancelado</option>
        @elseif($ventas->estado=='1')
            <option value="0">Abierto</option>
            <option value="1" selected>Cerrado</option>
            <option value="2">Cancelado</option>
        @else
            <option value="0">Abierto</option>
            <option value="1">Cerrado</option>
            <option value="2" selected>Cancelado</option>
        @endif
    </select>
</div>
