    {!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł notatki', 'autofocus'=>'autofocus']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Treść notatki']) !!}
</div>
    {!! Form::hidden('color', '#edc456') !!}
    {!! Form::submit($submitText, ['class' => 'btn note__form-btn float-right']) !!}
