<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Autor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autor', 'Autor:') !!}
    {!! Form::text('autor', null, ['class' => 'form-control']) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Document Field -->
<div class="form-group col-sm-6">
 {!! Form::label('type_document', 'Type Document:') !!}
   @if(isset($documentos))
   @if($documentos->type_document =='WYSIWYG')
            <br />
            {!! Form::radio('type_document','Markdown',false,[]) !!} Markdown
            <br />
            {!! Form::radio('type_document','WYSIWYG',true,['checked' => 'checked']) !!} WYSIWYG
        @else
            <br />
            {!! Form::radio('type_document','Markdown',true,['checked' => 'checked']) !!} Markdown
            <br />
            {!! Form::radio('type_document','WYSIWYG',false, []) !!} WYSIWYG
        @endif
   @else
   <br />
        {!! Form::radio('type_document','Markdown', ['class' => 'form-control']) !!} Markdown
        <br />
        {!! Form::radio('type_document','WYSIWYG', ['class' => 'form-control']) !!} WYSIWYG   
   
   @endif
    
</div>


<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpersonas', 'People Permission:') !!}
    {!! Form::text('idpersonas', null, ['class' => 'form-control']) !!}
</div>

@if(isset($documentos))
   @if($documentos->type_document =='WYSIWYG')
<!-- Document Body Field -->
<div class="form-group col-sm-12">
    {!! Form::label('document_body', 'Document Body:') !!}
    {!! Form::textarea('document_body', null, ['id'      => 'wysiwyg','class' => 'form-control']) !!}
</div>
   @else 
<!-- Document Body Field -->
<div class="form-group col-sm-12">
    {!! Form::label('document_body_markdown', 'Document Body:') !!}
    {!! Form::textarea('document_body_markdown', null, ['class' => 'form-control']) !!}
</div>
   @endif 
@else
    <div id="d_body" class="form-group col-sm-12">
        {!! Form::label('document_body', 'Document Body:') !!}
        {!! Form::textarea('document_body', null, ['id'      => 'wysiwyg1','class' => 'form-control']) !!}
    </div>

    <!-- Document Body Field -->
    <div id="d_body_mark" class="form-group col-sm-12">
        {!! Form::label('document_body_markdown', 'Document Body:') !!}
        {!! Form::textarea('document_body_markdown', null, ['class' => 'form-control']) !!}
    </div>
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('documentos.index') !!}" class="btn btn-default">Cancel</a>
</div>
