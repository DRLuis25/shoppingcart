<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
            <tr>
                <th>@lang('models/ventas.fields.cliente_id')</th>
                <th>@lang('models/ventas.fields.ccname')</th>
                <th>@lang('models/ventas.fields.ccnumber')</th>
                <th>@lang('models/ventas.fields.cc')</th>
                <th>@lang('models/ventas.fields.direccion')</th>
                <th>@lang('models/ventas.fields.subtotal')</th>
                <th>@lang('models/ventas.fields.envio')</th>
                <th>@lang('models/ventas.fields.otros')</th>
                <th>@lang('models/ventas.fields.total')</th>
                <th>@lang('models/ventas.fields.estado')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $ventas)
            <tr>
                <td>{{ $ventas->cliente_id }}</td>
            <td>{{ $ventas->ccname }}</td>
            <td>{{ $ventas->ccnumber }}</td>
            <td>{{ $ventas->cc }}</td>
            <td>{{ $ventas->direccion }}</td>
            <td>{{ $ventas->subtotal }}</td>
            <td>{{ $ventas->envio }}</td>
            <td>{{ $ventas->otros }}</td>
            <td>{{ $ventas->total }}</td>
            <td>{{ $ventas->estado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ventas.destroy', $ventas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ventas.show', [$ventas->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ventas.edit', [$ventas->id]) }}" class='btn btn-default btn-xs'>
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
