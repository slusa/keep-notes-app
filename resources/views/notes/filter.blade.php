@extends('master')
@section('filter')


<div class="modal-footer d-flex justify-content-center flex-wrap pt-5 mt-5">
    <p>lorem</p>

    @foreach ($colors as $color)
        {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
            <input name="color" value="{{ $color }}" type="hidden">
            <button type="submit" class="btn m-1 p-3 text-white" style="background-color: {{ $color }};"></button>
        {!! Form::close() !!}
    @endforeach
    </form>
</div>

@endsection
