<div class="row header__filter p-1 pl-2 pr-2 w-100 d-flex justify-content-center flex-wrap">
    @foreach ($colors as $color)
        <a href="{{ url('notes/filterColor', $color) }}" title="Filtruj po kolorze">
            <button type="button" class="header__filter-color btn m-1 p-3" style="background-color: {{ $color }};"></button>
        </a>
    @endforeach
</div>
