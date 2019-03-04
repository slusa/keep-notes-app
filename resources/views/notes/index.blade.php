@extends('master')
@section('content')

<div class="row mb-5">
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
                        <button type="button" class="btn p-3"><i class="fas fa-trash-alt note__top-icon deleteModal" data-toggle="modal" data-target="#deleteModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-delete-link="{{ route('notes.destroy', $note->id) }}"></i></button>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-secondary" id="deleteModal">Usuwanie notatki</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-secondary">
                                    Czy na pewno chcesz usunąć notatkę <span class="text-primary font-weight-bold modalTitle"></span> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['NotesController@destroy', $note->id]]) !!}
                                        <button type="submit" class="btn btn-danger">Usuń</button>
                                    {!! Form::close() !!}
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>



@endsection

