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
                    @include('usuarios.fields')
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
