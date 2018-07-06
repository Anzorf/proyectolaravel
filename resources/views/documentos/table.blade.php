<table class="table table-responsive" id="documentos-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Autor</th>
        <th>Tags</th>
        <th>Type Document</th>
        <th>People Permission</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($documentos as $documentos)
        <tr>
            <td>{!! $documentos->title !!}</td>
            <td>{!! $documentos->autor !!}</td>
            <td>{!! $documentos->tags !!}</td>
            <td>{!! $documentos->type_document !!}</td>
            <td>{!! $documentos->idpersonas !!}</td>
            <td>
                {!! Form::open(['route' => ['documentos.destroy', $documentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documentos.edit', [$documentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documentos.edit', [$documentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('documentos.pdf', [$documentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-download"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>