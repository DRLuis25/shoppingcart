@extends('layouts.cliente')



@section('content')
<div class="container mt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h2>@lang('models/usuarios.singular')</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="content px-3">
    
        @include('adminlte-templates::common.errors')
    
        <div class="card">
    
            {!! Form::open(['route' => 'usuarios.store']) !!}
    
            <div class="card-body">
    
                <div class="row">
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
                    <!-- Password Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('password', 'Confirmar '. __('models/usuarios.fields.password').':') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                </div>
    
            </div>
    
            <div class="card-footer">
                {!! Form::submit(__('crud.register'), ['class' => 'btn btn-primary']) !!}
                <a href="{{ url()->previous() }}" class="btn btn-default">@lang('crud.cancel')</a>
            </div>
    
            {!! Form::close() !!}
    
        </div>
    </div>
</div>

@endsection
