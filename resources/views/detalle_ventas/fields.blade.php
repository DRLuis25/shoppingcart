<!-- Venta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venta_id', __('models/detalleVentas.fields.venta_id').':') !!}
    {!! Form::number('venta_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', __('models/detalleVentas.fields.product_id').':') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', __('models/detalleVentas.fields.precio').':') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', __('models/detalleVentas.fields.cantidad').':') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtotal', __('models/detalleVentas.fields.subtotal').':') !!}
    {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
</div>
