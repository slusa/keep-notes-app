    {!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł', 'autofocus'=>'autofocus', 'required' => 'required']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Treść', 'required' => 'required']) !!}
</div>

@if (Session::has('note_editing'))
    <div class="form-group">
        {!! Form::label('color', 'Kolor'); !!}
        {!! Form::select('color', $colors, $note->color, ['class' => 'form-control noteColor']) !!}
    </div>
@elseif (Session::has('note_adding'))
    <div class="form-group">
        {!! Form::label('color', 'Kolor'); !!}
        {!! Form::select('color', $colors, '#556B8C', ['class' => 'form-control noteColor']) !!}
    </div>
@endif

@if (Session::has('note_editing'))
    <div class="form-group">
        {!! Form::label('color', 'Priorytet: '); !!}
        <br/>
        {!! Form::radio('priority', 0) !!} niski
        {!! Form::radio('priority', 1) !!} wysoki
    </div>
@elseif (Session::has('note_adding'))
    <div class="form-group">
        {!! Form::label('color', 'Priorytet: '); !!}
        <br/>
        {!! Form::radio('priority', 0, true) !!} niski
        {!! Form::radio('priority', 1) !!} wysoki
    </div>
@endif


    {!! Form::submit($submitText, ['class' => 'btn note__form-btn float-right']) !!}
