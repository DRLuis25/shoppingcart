@extends('layouts.cliente')

@section('content')
<div class="container">
    @include('flash::message')
    <table class="table table-bordered">
        <tbody>
            <tr>
              <td><img src="../luffy.png" class="img-fluid" style="max-width:20%; height: auto"  alt=""> Agregado al carrito</td>
              <th>Subtotal del carrito( cantidad del carrito): S/.25</th>
              <td><a href="{{route('review')}}" class="btn btn-outline-primary">Carrito</a>
                <a href="{{route('signin')}}" class="btn btn-outline-primary">Tramitar pedido</a>
            </td>
            </tr>
            <tr>
          </tbody>
    </table>
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center" style="margin-top: 25px">
          <a href="{{route('review')}}" class="btn btn-outline-primary">Carrito</a>
            <a href="{{route('listarproductos')}}" class="btn btn-outline-primary">Seguir comprando</a>
        </div>           
    </div>
</div>
@endsection 