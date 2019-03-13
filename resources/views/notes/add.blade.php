@extends('master')
@section('content')

<div class="row justify-content-center pb-3 pt-3">
        <div class="p-2 col-xs-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 mt-3 mb-3">
            <div class="card note__form" style="background-color: #556B8C;">
                <div class="card-body p-2">

                    {!! Form::open(['url' => 'notes']) !!}
                    <legend>Nowa notatka</legend>

                    @include('notes.form', ['submitText' => 'Dodaj notatkę'])

                    {!! Form::close() !!}

                </div>

            </div>
        </div>
</div>

@endsection
