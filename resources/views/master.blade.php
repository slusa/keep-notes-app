<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Keep notes</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <div class="row header">
                    <div class="col-9 p-3">
                        <h1 class="m-0 text-white header__title">Keep notes</h1>
                    </div>
                    <div class="col p-3 d-flex justify-content-end">
                        <button type="button" class="btn h-100 p-0"><a href="{{ url('notes/create') }}"><i class="far fa-plus-square header__add-icon"></i></a></button>
                    </div>
                </div>
            </header>



            <article>

                @yield('content')

            </article>




            <footer>
                <div class="row footer">
                    <div class="col p-3">
                        <p class="m-0 text-center">Keep notes &copy; All rights reserved</p>
                    </div>
                </div>
            </footer>
        </div>












        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/modals.js') }}"></script>
    </body>
</html>
