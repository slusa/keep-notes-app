@extends('master')
@section('content')

<div class="row justify-content-center">
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 mt-3 mb-3">
            <div class="card note__form">
                <div class="card-body">

                    {!! Form::model($note, ['method' => 'PATCH', 'action' => ['NotesController@update', $note->id]]) !!}
                    <legend>Tryb edycji</legend>

                    @include('notes.form', ['submitText' => 'Zapisz zmiany'])

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
</div>

@endsection
