    {!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł notatki', 'autofocus'=>'autofocus', 'required' => 'required']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Treść notatki', 'required' => 'required']) !!}
</div>

@if (Session::has('note_editing'))
    <div class="form-group">
        {!! Form::label('color', 'Kolor notatki'); !!}
        {!! Form::select('color', array('#3C91E6' => 'niebieski', '#1A936F' => 'zielony', '#FF8811' => 'pomarańczowy', '#392F5A' => 'fioletowy', '#FF0F80' => 'różowy', '#72483D' => 'brązowy', '#556B8C' => 'szary', '#F64740' => 'czerwony'), $note->color, ['class' => 'form-control noteColor']) !!}
    </div>
@elseif (Session::has('note_adding'))
    <div class="form-group">
        {!! Form::label('color', 'Kolor notatki'); !!}
        {!! Form::select('color', array('#3C91E6' => 'niebieski', '#1A936F' => 'zielony', '#FF8811' => 'pomarańczowy', '#392F5A' => 'fioletowy', '#FF0F80' => 'różowy', '#72483D' => 'brązowy', '#556B8C' => 'szary', '#F64740' => 'czerwony'), '#556B8C', ['class' => 'form-control noteColor']) !!}
    </div>
@endif

@if (Session::has('note_editing'))
    <div class="form-group">
        {!! Form::label('color', 'Priorytet notatki: '); !!}
        <br/>
        {!! Form::radio('priority', 0) !!} niski
        {!! Form::radio('priority', 1) !!} wysoki
    </div>
@elseif (Session::has('note_adding'))
    <div class="form-group">
        {!! Form::label('color', 'Priorytet notatki: ', ['class' => 'font-weight-bold']); !!}
        <br/>
        {!! Form::radio('priority', 0, true) !!} <b>niski</b>
        {!! Form::radio('priority', 1) !!} <b>wysoki</b>
    </div>
@endif


    {!! Form::submit($submitText, ['class' => 'btn note__form-btn float-right']) !!}
