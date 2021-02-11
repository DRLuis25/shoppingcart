<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', __('models/productos.fields.descripcion').':') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', __('models/productos.fields.foto').':') !!} <br>
    
    <input type="file" class="form-control-file" id="foto" name="foto">
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', __('models/productos.fields.stock').':') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', __('models/productos.fields.precio').':') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', __('models/productos.fields.categoria_id').':') !!}
    {!! Form::number('categoria_id', null, ['class' => 'form-control']) !!}
</div>
