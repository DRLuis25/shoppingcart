<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>@lang('models/productos.fields.descripcion')</th>
                <th>@lang('models/productos.fields.stock')</th>
                <th>@lang('models/productos.fields.precio')</th>
                <th>@lang('models/productos.fields.categoria_id')</th>
                <th>@lang('models/productos.fields.foto')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{ $productos->descripcion }}</td>
                <td>{{ $productos->stock }}</td>
                <td>{{ $productos->precio }}</td>
                <td>{{ $productos->categoria->descripcion }}</td>
                <td width="250"><img src="{{ $productos->foto }}" alt="" class="img-responsive" width="50%"></td>
                <td width="120">
                    {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$productos->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productos.edit', [$productos->id]) }}" class='btn btn-default btn-xs'>
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
