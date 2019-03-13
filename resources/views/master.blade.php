<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Keep notes</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <div class="row header p-1 pl-2 pr-2 w-100">
                    <div class="col-9 col-sm-5 col-md-4 col-lg-3 col-xl-2 p-0 d-flex align-items-center">
                        <a href="{{ url('notes') }}" title="Pilnuj swoich notatek!" class="d-flex align-items-center header__top-link"><i class="mr-2 far fa-sticky-note header__top-icon"></i> <h1 class="m-0 text-white header__top-name">Keep notes</h1></a>
                    </div>
                    <div class="col-3 col-sm-7 col-md-8 col-lg-9 col-xl-10 p-0 d-flex align-items-center justify-content-end">
                        <a href="{{ url('notes/create') }}" class="mr-2 header__top-link" title="Utwórz notatkę"><i class="p-2 d-flex align-items-center far fa-plus-square header__top-icon"></i></a>
                        <a href="{{ url('logout') }}" class="header__top-link" title="Wyloguj się"><i class="p-2 d-flex align-items-center fas fa-sign-out-alt header__top-icon"></i></a>
                    </div>
                </div>

            </header>



            <article class="pt-5 pb-5">

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
