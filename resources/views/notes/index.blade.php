@extends('master')
@section('content')

@yield('filter')

@if (count($notesHigh) != 0)
<h2 class="notes__section text-secondary mt-3">Notatki ważniejsze</h2>
<div class="row pb-5 pt-1">
    @foreach ($notesHigh as $note)
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-2 mb-2 pl-2 pr-2">
            <div class="card note" style="background-color: {{ $note->color }}">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between align-items-center note__panel">
                        <h4 class="card-title note__title mt-2 ml-2">{{ str_limit($note->title, 50) }}</h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('notes/changePriority', $note->id) }}">
                                @switch($note->priority)
                                    @case(0)
                                        <i class="p-2 note__icon far fa-star"></i>
                                        @break

                                    @case(1)
                                        <i class="p-2 note__icon fas fa-star"></i>
                                        @break
                                    @default
                                @endswitch
                            <a href="{{ url('notes', $note->id) }}"><i class="p-2 note__icon fas fa-pencil-alt"></i></a>
                        </div>
                    </div>
                    <p class="card-text pr-2 pl-2 pb-4 text-justify note__content">{{ str_limit($note->content, 300) }}</p>
                    <div class="d-flex justify-content-between align-items-center note__bottom-section">
                        <i class="p-2 note__icon fas fa-trash-alt deleteModal" data-toggle="modal" data-target="#deleteModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-delete-link="{{ route('notes.destroy', $note->id) }}" data-color="{{ $note->color }}"></i>
                        <p class="text-center note__date mb-0">{{ $note->updated_at->format('Y-m-d H:i') }}</p>
                        <i class="p-2 note__icon fas fa-palette colorModal" data-toggle="modal" data-target="#colorModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-color="{{ $note->color }}" data-color-link="{{ url('notes/changeColor', $note->id) }}"></i>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-secondary">Usuń notatkę</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <span class="font-weight-bold modalTitle"></span>
                                </div>
                                <div class="modal-footer">
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['NotesController@destroy', $note->id]]) !!}
                                        <button type="submit" class="btn btn-danger">Usuń</button>
                                    {!! Form::close() !!}
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="colorModal" tabindex="-1" role="dialog" aria-labelledby="colorModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-secondary">Zmień kolor notatki</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <span class="font-weight-bold modalTitle"></span>
                                </div>
                                <div class="modal-footer d-flex justify-content-center flex-wrap">

                                    @foreach ($colors as $color)
                                        {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                            <input name="color" value="{{ $color }}" type="hidden">
                                            <button type="submit" class="btn m-1 p-3 text-white" style="background-color: {{ $color }};"></button>
                                        {!! Form::close() !!}
                                    @endforeach
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
@endif


<h2 class="notes__section text-secondary mt-3">Notatki mniej ważne</h2>
<div class="row pb-5 pt-1">
        @foreach ($notesLow as $note)
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-2 mb-2 pl-2 pr-2">
                <div class="card note" style="background-color: {{ $note->color }}">
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-between align-items-center note__panel">
                            <h4 class="card-title note__title mt-2 ml-2">{{ str_limit($note->title, 50) }}</h4>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('notes/changePriority', $note->id) }}">
                                    @switch($note->priority)
                                        @case(0)
                                            <i class="p-2 note__icon far fa-star"></i>
                                            @break

                                        @case(1)
                                            <i class="p-2 note__icon fas fa-star"></i>
                                            @break
                                        @default
                                    @endswitch
                                <a href="{{ url('notes', $note->id) }}"><i class="p-2 note__icon fas fa-pencil-alt"></i></a>
                            </div>
                        </div>
                        <p class="card-text pr-2 pl-2 pb-4 text-justify note__content">{{ str_limit($note->content, 300) }}</p>
                        <div class="d-flex justify-content-between align-items-center note__bottom-section">
                            <i class="p-2 note__icon fas fa-trash-alt deleteModal" data-toggle="modal" data-target="#deleteModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-delete-link="{{ route('notes.destroy', $note->id) }}" data-color="{{ $note->color }}"></i>
                            <p class="text-center note__date mb-0">{{ $note->updated_at->format('Y-m-d H:i') }}</p>
                            <i class="p-2 note__icon fas fa-palette colorModal" data-toggle="modal" data-target="#colorModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-color="{{ $note->color }}" data-color-link="{{ url('notes/changeColor', $note->id) }}"></i>
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-secondary">Usuń notatkę</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="font-weight-bold modalTitle"></span>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['method' => 'DELETE', 'action' => ['NotesController@destroy', $note->id]]) !!}
                                            <button type="submit" class="btn btn-danger">Usuń</button>
                                        {!! Form::close() !!}
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="colorModal" tabindex="-1" role="dialog" aria-labelledby="colorModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-secondary">Zmień kolor notatki</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="font-weight-bold modalTitle"></span>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center flex-wrap">

                                        @foreach ($colors as $color)
                                            {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                                <input name="color" value="{{ $color }}" type="hidden">
                                                <button type="submit" class="btn m-1 p-3 text-white" style="background-color: {{ $color }};"></button>
                                            {!! Form::close() !!}
                                        @endforeach
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

