    {!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł notatki', 'autofocus'=>'autofocus']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Treść notatki']) !!}
</div>

@if (Session::has('note_editing'))
    <div class="form-group">
        {!! Form::select('color', array('#324dce' => '1', '#356E7C' => '2', '#FF8811' => '3', '#392F5A' => '4', '#731963' => '5', '#72483D' => '6', '#556B8C' => '7'), $note->color, ['class' => 'form-control noteColor']) !!}
    </div>
@elseif (Session::has('note_adding'))
    {!! Form::hidden('color', '#edc456') !!}
@endif


    {!! Form::submit($submitText, ['class' => 'btn note__form-btn float-right']) !!}
