@extends('master')
@section('content')

<div class="row header__filter p-1 pl-2 pr-2 w-100 d-flex justify-content-center flex-wrap">
    @foreach ($colors as $color)
        <a href="{{ url('notes/filterColor', $color) }}" title="Filtruj po kolorze">
            <button type="button" class="header__filter-color btn m-1 p-3" style="background-color: {{ $color }};"></button>
        </a>
    @endforeach
</div>

<div class="row mb-5">
    <div class="d-flex align-items-center w-100">
        <h2 class="m-0 mt-5 pt-5 pl-3 pr-3 text-center text-secondary w-100">Nie masz jeszcze żadnych notatek ;(</h2>
    </div>
</div>



@endsection
