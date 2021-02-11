<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>@lang('models/usuarios.fields.name')</th>
                <th>@lang('models/usuarios.fields.last_name')</th>
                <th>@lang('models/usuarios.fields.email')</th>
                <th>@lang('models/usuarios.fields.ciudad')</th>
                <th>@lang('models/usuarios.fields.estado')</th>
                <th>@lang('models/usuarios.fields.pais')</th>
                <th>@lang('models/usuarios.fields.zip')</th>
                <th>@lang('models/usuarios.fields.telefono')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->last_name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->ciudad }}</td>
                    <td>{{ $usuario->estado }}</td>
                    <td>{{ $usuario->pais }}</td>
                    <td>{{ $usuario->zip }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('usuarios.show', [$usuario->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('usuarios.edit', [$usuario->id]) }}" class='btn btn-default btn-xs'>
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
