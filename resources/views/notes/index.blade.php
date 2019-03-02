@extends('master')
@section('content')

<div class="row">
    @foreach ($notes as $note)
        <div class="col-xs-12 col-md-6 col-lg-4 mt-3 mb-3">
            <div class="card bg-secondary pb-4 note">
                <div class="card-body pt-0 pr-0">
                    <div class="d-flex justify-content-between note__panel">
                        <h4 class="card-title mt-3">{{ $note->title }}</h4>
                        <div class="note__panel-buttons d-flex justify-content-end">
                            <button type="button" class="btn p-3"><a href="{{ url('notes/destroy', $note->id) }}"><i class="fas fa-trash-alt note__icon"></i></a></button>
                            <button type="button" class="btn p-3"><a href="{{ url('notes', $note->id) }}"><i class="fas fa-marker note__icon"></i></a></button>
                        </div>
                    </div>
                    <p class="card-text pr-3">{{ $note->content }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
