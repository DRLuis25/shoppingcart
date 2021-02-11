<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/usuarios.fields.name').':') !!}
    <p>{{ $usuarios->name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', __('models/usuarios.fields.last_name').':') !!}
    <p>{{ $usuarios->last_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', __('models/usuarios.fields.email').':') !!}
    <p>{{ $usuarios->email }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', __('models/usuarios.fields.direccion').':') !!}
    <p>{{ $usuarios->direccion }}</p>
</div>

<!-- Direccion2 Field -->
<div class="col-sm-12">
    {!! Form::label('direccion2', __('models/usuarios.fields.direccion2').':') !!}
    <p>{{ $usuarios->direccion2 }}</p>
</div>

<!-- Ciudad Field -->
<div class="col-sm-12">
    {!! Form::label('ciudad', __('models/usuarios.fields.ciudad').':') !!}
    <p>{{ $usuarios->ciudad }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', __('models/usuarios.fields.estado').':') !!}
    <p>{{ $usuarios->estado }}</p>
</div>

<!-- Pais Field -->
<div class="col-sm-12">
    {!! Form::label('pais', __('models/usuarios.fields.pais').':') !!}
    <p>{{ $usuarios->pais }}</p>
</div>

<!-- Zip Field -->
<div class="col-sm-12">
    {!! Form::label('zip', __('models/usuarios.fields.zip').':') !!}
    <p>{{ $usuarios->zip }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', __('models/usuarios.fields.telefono').':') !!}
    <p>{{ $usuarios->telefono }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', __('models/usuarios.fields.password').':') !!}
    <p>{{ $usuarios->password }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', __('models/usuarios.fields.email_verified_at').':') !!}
    <p>{{ $usuarios->email_verified_at }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', __('models/usuarios.fields.remember_token').':') !!}
    <p>{{ $usuarios->remember_token }}</p>
</div>

