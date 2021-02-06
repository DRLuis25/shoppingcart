<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', __('models/productos.fields.descripcion').':') !!}
    <p>{{ $productos->descripcion }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', __('models/productos.fields.foto').':') !!}
    <p>{{ $productos->foto }}</p>
</div>

<!-- Stock Field -->
<div class="col-sm-12">
    {!! Form::label('stock', __('models/productos.fields.stock').':') !!}
    <p>{{ $productos->stock }}</p>
</div>

<!-- Precio Field -->
<div class="col-sm-12">
    {!! Form::label('precio', __('models/productos.fields.precio').':') !!}
    <p>{{ $productos->precio }}</p>
</div>

<!-- Categoria Id Field -->
<div class="col-sm-12">
    {!! Form::label('categoria_id', __('models/productos.fields.categoria_id').':') !!}
    <p>{{ $productos->categoria_id }}</p>
</div>

