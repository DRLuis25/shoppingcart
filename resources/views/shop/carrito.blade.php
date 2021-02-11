<div class="table-responsive">
    <table class="table" id="carrito-table">
        <thead>
            <tr>
                <th>@lang('carrito.articles')</th>
                <th>@lang('carrito.quantity')</th>
                <th>@lang('carrito.unitprice')</th>
                <th>@lang('carrito.total')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @isset($productos)
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->total }}</td>
                        <td width="120">
                            {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('productos.show', [$producto->id]) }}" class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('productos.edit', [$producto->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endisset
            <tr>
                <td>Producto 1</td>
                <td>1</td>
                <td>20.99</td>
                <td>20.99</td>
                <td width="120">
                    {!! Form::open(['route' => ['productos.destroy',1], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
    </table>
</div>
