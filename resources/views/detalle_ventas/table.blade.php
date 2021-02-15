<div class="table-responsive">
    <table class="table" id="detalleVentas-table">
        <thead>
            <tr>
                <th>@lang('models/detalleVentas.fields.venta_id')</th>
        <th>@lang('models/detalleVentas.fields.product_id')</th>
        <th>@lang('models/detalleVentas.fields.precio')</th>
        <th>@lang('models/detalleVentas.fields.cantidad')</th>
        <th>@lang('models/detalleVentas.fields.subtotal')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalleVentas as $detalleVentas)
            <tr>
                <td>{{ $detalleVentas->venta_id }}</td>
            <td>{{ $detalleVentas->product_id }}</td>
            <td>{{ $detalleVentas->precio }}</td>
            <td>{{ $detalleVentas->cantidad }}</td>
            <td>{{ $detalleVentas->subtotal }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['detalleVentas.destroy', $detalleVentas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleVentas.show', [$detalleVentas->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('detalleVentas.edit', [$detalleVentas->id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
