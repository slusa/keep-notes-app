@extends('master')
@section('content')

<div class="row">
    @foreach ($notes as $note)
        <div class="col-xs-12 col-md-6 col-lg-4 mt-3 mb-3">
            <div class="card bg-secondary note">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between note__panel">
                        <h4 class="card-title mt-3 ml-3">{{ $note->title }}</h4>
                        <div class="d-flex justify-content-end">
                        <button type="button" class="btn p-3"><a href="{{ url('notes/changePriority', $note->id) }}">
                            @switch($note->priority)
                                @case(0)
                                    <i class="note__top-icon far fa-star"></i>
                                    @break

                                @case(1)
                                    <i class="note__top-icon fas fa-star"></i>
                                    @break
                                @default
                            @endswitch
                        </button>
                            <button type="button" class="btn p-3"><a href="{{ url('notes', $note->id) }}"><i class="fas fa-marker note__top-icon"></i></a></button>
                        </div>
                    </div>
                    <p class="card-text pr-3 pl-3">{{ $note->content }}</p>
                    <div class="d-flex justify-content-start">
                        <button type="button" class="btn p-3"><a href="{{ url('notes/destroy', $note->id) }}"><i class="fas fa-trash-alt note__top-icon"></i></a></button>
                        <button type="button" class="btn p-3"><a href="{{ url('notes', $note->id) }}"><i class="fas fa-marker note__top-icon"></i></a></button>
                        <button type="button" class="btn p-3"><a href="{{ url('notes/destroy', $note->id) }}"><i class="fas fa-trash-alt note__top-icon"></i></a></button>
                        <button type="button" class="btn p-3"><a href="{{ url('notes', $note->id) }}"><i class="fas fa-marker note__top-icon"></i></a></button>
                        <button type="button" class="btn p-3"><a href="{{ url('notes/destroy', $note->id) }}"><i class="fas fa-trash-alt note__top-icon"></i></a></button>
                        <button type="button" class="btn p-3"><a href="{{ url('notes', $note->id) }}"><i class="fas fa-marker note__top-icon"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
