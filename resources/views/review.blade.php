@extends('layouts.cliente')

@section('content')
<div class="container">
    <div class="col-sm-4 bg-white ">
        <h1> Menú principal</h1>
    </div>
    <div class="row  justify-content-center ">
        <div class="col-sm-12 justify-content-center mx-auto text-center" style="">
            <p style="font-family: fantasy;margin-top: 10px; font-size: 20px ">CONTENIDO DEL CARRITO DE COMPRAS</p>
            <table class="table" id="seccions-table">
                <thead>
                    <tr>
                        <th colspan="2">Acciones</th>
                        <th>Articulo</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                {{-- @foreach($seccions as $seccion) --}}
                    <tr>
                        {{-- <td>{{ $seccion->descripcion }}</td> --}}
                        <td width="120">
                            {{-- {!! Form::open(['route' => ['seccions.destroy', $seccion->id], 'method' => 'delete']) !!} --}}
                            <div class='btn-group'>
                                </a>
                                {{-- <a href="{{ route('seccions.edit', [$seccion->id]) }}" class='btn btn-default btn-xs'> --}}
                                    <i class="far fa-edit"></i>
                                </a>
                                {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                            </div>
                            {{-- {!! Form::close() !!} --}}
                        </td>
                    </tr>
                {{-- @endforeach --}}
                </tbody>
            </table>
            <div class="row">                       
                <div class="col-md-8">
                </div>   
                <div class="col-md-2">                        
                    <label for="">SubTotal : </label>    
                </div>   
                <div class="col-md-2">
                    <input type="text" class="form-control text-right" name="subtotal" id="subtotal" readonly="readonly">                              
                </div>   
            </div>
            <div class="mx-auto text-center" style="margin: 20px">
                <button type="button" class="btn btn-outline-primary" >Vaciar carrito</button>
                <button type="button" class="btn btn-outline-primary" >Proceder con el pago</button>
            </div> 
        </div>
    </div>
</div>
@endsection
