<div class="table-responsive">
    <table class="table" id="categorias-table">
        <thead>
            <tr>
                <th>@lang('models/categorias.fields.descripcion')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categorias)
            <tr>
                <td>{{ $categorias->descripcion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['categorias.destroy', $categorias->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorias.show', [$categorias->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categorias.edit', [$categorias->id]) }}" class='btn btn-default btn-xs'>
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
