<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', __('models/ventas.fields.cliente_id').':') !!}
    {!! Form::number('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ccname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ccname', __('models/ventas.fields.ccname').':') !!}
    {!! Form::text('ccname', null, ['class' => 'form-control']) !!}
</div>

<!-- Ccnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ccnumber', __('models/ventas.fields.ccnumber').':') !!}
    {!! Form::text('ccnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Cc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cc', __('models/ventas.fields.cc').':') !!}
    {!! Form::text('cc', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', __('models/ventas.fields.direccion').':') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtotal', __('models/ventas.fields.subtotal').':') !!}
    {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('envio', __('models/ventas.fields.envio').':') !!}
    {!! Form::number('envio', null, ['class' => 'form-control']) !!}
</div>

<!-- Otros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otros', __('models/ventas.fields.otros').':') !!}
    {!! Form::number('otros', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', __('models/ventas.fields.total').':') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', __('models/ventas.fields.estado').':') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>
