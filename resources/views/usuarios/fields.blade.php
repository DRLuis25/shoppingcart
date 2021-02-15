<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/usuarios.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', __('models/usuarios.fields.last_name').':') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/usuarios.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', __('models/usuarios.fields.direccion').':') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion2', __('models/usuarios.fields.direccion2').' (opcional):') !!}
    {!! Form::text('direccion2', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', __('models/usuarios.fields.ciudad').':') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', __('models/usuarios.fields.estado').':') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', __('models/usuarios.fields.pais').':') !!}
    {!! Form::text('pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', __('models/usuarios.fields.zip').':') !!}
    {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', __('models/usuarios.fields.telefono').':') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('models/usuarios.fields.password').':') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Rol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', __('models/usuarios.fields.role').':') !!}
    <select name="role" id="role" class="form-control" required >
        <option value="">Seleccione un rol</option>
        @foreach ($roles as $item)
            <option value="{{$item->name}}" @isset($usuarios)
                
            @if (implode(" ",$usuarios->getRoleNames()->toArray())==$item->name){{'selected'}}             
            @endif @endisset >{{$item->name}}</option>
        @endforeach
    </select>
</div>
