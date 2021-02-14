<div class="table-responsive">
    <table class="table" id="carrito-table">
        <thead>
            <tr>
                <th>@lang('crud.action')</th>
                <th>@lang('carrito.quantity')</th>
                <th>@lang('carrito.articles')</th>
                <th>@lang('carrito.unitprice')</th>
                <th>@lang('carrito.importe')</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Cart::content() as $item)
                <tr>
                    <td width="120">
                        {!! Form::open(['route' => ['productos.destroy',1], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">                       
    <div class="col-md-8">
    </div>   
    <div class="col-md-2">                        
        <label for="">SubTotal : </label>    
        
    </div>   
    <div class="col-md-2">
        <input type="text" class="form-control text-right" readonly="readonly" value="{{Cart::subtotal()}}">                              
    </div>   
</div>