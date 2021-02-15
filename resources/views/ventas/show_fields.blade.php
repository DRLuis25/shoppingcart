<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', __('models/ventas.fields.cliente_id').':') !!}
    <p>{{ $ventas->cliente_id }}</p>
</div>

<!-- Ccname Field -->
<div class="col-sm-12">
    {!! Form::label('ccname', __('models/ventas.fields.ccname').':') !!}
    <p>{{ $ventas->ccname }}</p>
</div>

<!-- Ccnumber Field -->
<div class="col-sm-12">
    {!! Form::label('ccnumber', __('models/ventas.fields.ccnumber').':') !!}
    <p>{{ $ventas->ccnumber }}</p>
</div>

<!-- Cc Field -->
<div class="col-sm-12">
    {!! Form::label('cc', __('models/ventas.fields.cc').':') !!}
    <p>{{ $ventas->cc }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', __('models/ventas.fields.direccion').':') !!}
    <p>{{ $ventas->direccion }}</p>
</div>

<!-- Subtotal Field -->
<div class="col-sm-12">
    {!! Form::label('subtotal', __('models/ventas.fields.subtotal').':') !!}
    <p>{{ $ventas->subtotal }}</p>
</div>

<!-- Envio Field -->
<div class="col-sm-12">
    {!! Form::label('envio', __('models/ventas.fields.envio').':') !!}
    <p>{{ $ventas->envio }}</p>
</div>

<!-- Otros Field -->
<div class="col-sm-12">
    {!! Form::label('otros', __('models/ventas.fields.otros').':') !!}
    <p>{{ $ventas->otros }}</p>
</div>

<!-- Total Field -->
<div class="col-sm-12">
    {!! Form::label('total', __('models/ventas.fields.total').':') !!}
    <p>{{ $ventas->total }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', __('models/ventas.fields.estado').':') !!}
    <p>{{ $ventas->estado }}</p>
</div>

