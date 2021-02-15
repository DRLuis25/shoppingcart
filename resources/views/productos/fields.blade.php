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
    {!! Form::number('stock', null, ['class' => 'form-control','onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57)','min' => '1']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', __('models/productos.fields.precio').':') !!}
    {!! Form::text('precio', null, ['class' => 'form-control','onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', __('models/productos.fields.categoria_id').':') !!}
    <select name="categoria_id" id="categoria_id" class="form-control">
        <option value=""> Seleccione categoria</option>
        @foreach ($categorias as $item)
            <option value="{{$item->id}}" @isset($productos)
                @if ($item->id==$productos->categoria_id){{'selected'}}             
                @endif
            @endisset>{{$item->descripcion}}</option>
        @endforeach
    </select>
</div>
