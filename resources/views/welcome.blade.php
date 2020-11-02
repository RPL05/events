<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-teal-900 border-bottom">
            <h3 class="my-0 mr-md-auto font-weight-normal">
                Event
            </h3>
            <nav class="my-2 my-md-0 mr-md-3">
                <a href="" class="p-2 text-dark">Login</a>
                <a href="" class="p-2 text-dark">Register</a>
            </nav>
        </div>
        <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline ml-4 py-2">
                <a href="" class="nav-link"> <h6 class="text-muted">Home</h6></a>
            <a href="{{ route('backend.kegiatan.index') }}" class="nav-link"> <h6 class="text-muted">Kegiatan</h6></a>
                <a href="" class="nav-link"> <h6 class="text-muted">Daftar</h6></a>
            </nav>
        </div>
        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('') }}" alt="">
                                <div class="card-body">
                                    <h3>Judul</h3>
                                    <p>isi</p>
                                </div>
                            </div>
                        </div> <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('') }}" alt="">
                                <div class="card-body">
                                    <h3>Judul</h3>
                                    <p>isi</p>
                                </div>
                            </div>
                        </div> <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('') }}" alt="">
                                <div class="card-body">
                                    <h3>Judul</h3>
                                    <p>isi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
