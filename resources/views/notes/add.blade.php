@extends('master')
@section('content')

<div class="row justify-content-center">
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 mt-3 mb-3">
            <div class="card bg-secondary note">
                <div class="card-body">

                    {!! Form::open(['url' => 'notes']) !!}
                    <legend>Nowa notatka</legend>

                    @include('notes.form', ['submitText' => 'Dodaj notatkę'])

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
</div>

@endsection
