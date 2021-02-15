<!-- Venta Id Field -->
<div class="col-sm-12">
    {!! Form::label('venta_id', __('models/detalleVentas.fields.venta_id').':') !!}
    <p>{{ $detalleVentas->venta_id }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', __('models/detalleVentas.fields.product_id').':') !!}
    <p>{{ $detalleVentas->product_id }}</p>
</div>

<!-- Precio Field -->
<div class="col-sm-12">
    {!! Form::label('precio', __('models/detalleVentas.fields.precio').':') !!}
    <p>{{ $detalleVentas->precio }}</p>
</div>

<!-- Cantidad Field -->
<div class="col-sm-12">
    {!! Form::label('cantidad', __('models/detalleVentas.fields.cantidad').':') !!}
    <p>{{ $detalleVentas->cantidad }}</p>
</div>

<!-- Subtotal Field -->
<div class="col-sm-12">
    {!! Form::label('subtotal', __('models/detalleVentas.fields.subtotal').':') !!}
    <p>{{ $detalleVentas->subtotal }}</p>
</div>

