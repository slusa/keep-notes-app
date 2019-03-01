@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header text-secondary">Udało się</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-secondary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span class="text-secondary">Jesteś zalogowany!</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
