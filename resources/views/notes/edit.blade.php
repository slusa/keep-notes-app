@extends('master')
@section('content')

<div class="row">
        <div class="col-xs-12 col-md-6  mt-3 mb-3">
            <div class="card bg-secondary note">
                <div class="card-body">

                    {!! Form::model($note, ['method' => 'PATCH', 'action' => ['NotesController@update', $note->id]]) !!}

                    @include('notes.form', ['submitText' => 'Zapisz zmiany'])

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
</div>

@endsection
