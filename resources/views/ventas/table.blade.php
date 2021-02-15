<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
            <tr>
                <th>@lang('models/ventas.fields.cliente_id')</th>
                <th>@lang('models/ventas.fields.direccion')</th>
                <th>@lang('models/ventas.fields.subtotal')</th>
                <th>@lang('models/ventas.fields.total')</th>
                <th>@lang('models/ventas.fields.estado')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $ventas)
            <tr>
                <td>{{ $ventas->cliente->last_name }}, {{$ventas->cliente->name}}</td>
                <td>{{ $ventas->direccion }}</td>
                <td>{{ $ventas->subtotal }}</td>
                <td>{{ $ventas->total }}</td>
                <td>@if ($ventas->estado=='0')
                        {{'Abierto'}}
                    @elseif($ventas->estado=='1')
                        {{'Cerrado'}}
                    @else
                        {{'Cancelado'}}
                    @endif
                </td>
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
