<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $documentos->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $documentos->title !!}</p>
</div>

<!-- Autor Field -->
<div class="form-group">
    {!! Form::label('autor', 'Autor:') !!}
    <p>{!! $documentos->autor !!}</p>
</div>

<!-- Tags Field -->
<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{!! $documentos->tags !!}</p>
</div>

<!-- Type Document Field -->
<div class="form-group">
    {!! Form::label('type_document', 'Type Document:') !!}
    <p>{!! $documentos->type_document !!}</p>
</div>

<!-- Document Body Field -->
<div class="form-group">
    {!! Form::label('document_body', 'Document Body:') !!}
    <p>{!! $documentos->document_body !!}</p>
</div>

<!-- Idpersonas Field -->
<div class="form-group">
    {!! Form::label('idpersonas', 'Idpersonas:') !!}
    <p>{!! $documentos->idpersonas !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $documentos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $documentos->updated_at !!}</p>
</div>

