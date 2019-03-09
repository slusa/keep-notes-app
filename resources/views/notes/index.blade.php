@extends('master')
@section('content')

<div class="row mb-5">
    @foreach ($notes as $note)
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mb-3">
            <div class="card note" style="background-color: {{ $note->color }}">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between note__panel">
                        <h4 class="card-title mt-3 ml-3">{{ str_limit($note->title, 50) }}</h4>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn p-3"><a href="{{ url('notes/changePriority', $note->id) }}">
                                @switch($note->priority)
                                    @case(0)
                                        <i class="note__icon far fa-star"></i>
                                        @break

                                    @case(1)
                                        <i class="note__icon fas fa-star"></i>
                                        @break
                                    @default
                                @endswitch
                            </button>
                            <button type="button" class="btn p-3"><a href="{{ url('notes', $note->id) }}"><i class="fas fa-pencil-alt note__icon"></i></a></button>
                        </div>
                    </div>
                    <p class="text-center note_date">{{ $note->updated_at->format('Y-m-d H:i') }}</p>
                    <p class="card-text pr-3 pl-3 text-justify">{{ str_limit($note->content, 300) }}</p>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn p-3"><i class="fas fa-trash-alt note__icon deleteModal" data-toggle="modal" data-target="#deleteModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-delete-link="{{ route('notes.destroy', $note->id) }}"></i></button>
                        <button type="button" class="btn p-3"><i class="fas fa-palette note__icon colorModal" data-toggle="modal" data-target="#colorModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-color-link="{{ url('notes/changeColor', $note->id) }}"></i></button>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-secondary">Usuń notatkę</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-secondary">
                                    <span class="text-primary font-weight-bold modalTitle"></span>
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
                                <div class="modal-body text-secondary">
                                    <span class="text-primary font-weight-bold modalTitle"></span>
                                </div>
                                <div class="modal-footer d-flex justify-content-center flex-wrap">
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#3C91E6" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #3C91E6;">1</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#1A936F" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #1A936F;">2</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#FF8811" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #FF8811;">3</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#392F5A" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #392F5A;">4</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#FF0F80" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #FF0F80;">5</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#72483D" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #72483D;">6</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#556B8C" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #556B8C;">7</button>
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'POST', 'action' => ['NotesController@changeColor', $note->id]]) !!}
                                        <input name="color" value="#F64740" type="hidden">
                                        <button type="submit" class="btn m-1 text-white" style="background-color: #F64740;">8</button>
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

