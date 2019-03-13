@extends('master')
@section('content')

@include('notes.filter')

<div class="row mb-5">
    <div class="d-flex align-items-center w-100">
        <h2 class="m-0 mt-5 pt-5 pl-3 pr-3 text-center text-secondary w-100">Nie masz jeszcze żadnych notatek ;(</h2>
    </div>
</div>

@endsection
