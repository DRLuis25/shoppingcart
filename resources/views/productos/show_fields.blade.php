<!-- Descripcion Field -->
<div class="col-sm-4">
    {!! Form::label('descripcion', __('models/productos.fields.descripcion').':') !!}
    <p>{{ $productos->descripcion }}</p>
</div>

<!-- Categoria Id Field -->
<div class="col-sm-4">
    {!! Form::label('categoria_id', __('models/productos.fields.categoria_id').':') !!}
    <p>{{ $productos->categoria->descripcion }}</p>
</div>

<!-- Precio Field -->
<div class="col-sm-2">
    {!! Form::label('precio', __('models/productos.fields.precio').':') !!}
    <p>{{ $productos->precio }}</p>
</div>

<!-- Stock Field -->
<div class="col-sm-2">
    {!! Form::label('stock', __('models/productos.fields.stock').':') !!}
    <p>{{ $productos->stock }}</p>
</div>


<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', __('models/productos.fields.foto').':') !!}
    <p></p>
    <img src="{{ $productos->foto }}" alt="fotoproducto" style="width: 20%">
</div>
