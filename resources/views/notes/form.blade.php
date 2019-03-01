    {!! Form::hidden('user_id', 3, ['class' => 'form-control', 'placeholder' => 'Tytuł notatki']) !!}
<div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł notatki']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Treść notatki']) !!}
</div>

{!! Form::submit('Save', ['class' => 'btn btn-success note__icon float-right']) !!}
