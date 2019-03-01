@extends('master')
@section('content')

<div class="row">
        <div class="col-xs-12 col-md-6  mt-3 mb-3">
            <div class="card bg-secondary pb-4 note">
                <div class="card-body">
                    <h4 class="card-title">{{ $note->title }}</h4>
                    <p class="card-text">{{ $note->content }}</p>
                    <div class="d-flex justify-content-end note__panel">
                        <button type="button" class="btn h-100 p-3 pr-4 pl-4 bg-danger"><i class="fas fa-trash-alt note__icon"></i></button>
                        <button type="button" class="btn h-100 p-3 pr-4 pl-4 bg-success"><i class="fas fa-pen note__icon"></i></button>
                    </div>
                </div>

            </div>
        </div>
</div>

@endsection
