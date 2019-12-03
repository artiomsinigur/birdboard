<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title', 'Birdboard')</title>

    {{--Scripts--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--Styles--}}
    {{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
    <style>
        h1,h2,h3,h4, .breadcrump-item a {
            color: #B0B2B4;
        }
        .is-complete {
            color: #B0B2B4 !important;
            text-decoration: line-through;
        }
    </style>
</head>
<body style="background-color: #F5F6F9">
    <header>
        <!-- Navbar -->
        <nav class="navbar bg-white">
            <div class="container">

                <!-- Logo -->
                <div class="brand">
                    <a href="/projects" class="brand-link text-dark text-decoration-none font-weight-bold">
                        <img class="brand-img mr-2" src="https://placeimg.com/35/35/any" alt="Birdboard">Birdboard
                    </a>
                </div><!-- /End brand -->

                <!-- Auth -->
                <div class="auth">
                    <div class="dropdown">
                        <a class="btn btn-sm btn-secondary dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownAuth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Connection</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAuth" style="font-size: .85rem;">
                            <!-- Login -->
                            <a href="" class="dropdown-item login">Login</a>
                            <!-- Register -->
                            <a href="" class="dropdown-item register">Register</a>
                        </div>
                    </div>
                </div><!-- /End auth -->

                <!-- User connected-->
                <div class="user d-none">
                    <div class="dropdown">
                        <a class="dropdown-toggle user-link" href="#" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://placeimg.com/35/35/any" alt="User name" class="user-img">
                            <span class="user-name">Sinigur Artiom</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownUser">
                            <a href="" class="dropdown-item logout">Logout</a>
                        </div>
                    </div>
                </div><!-- /End user -->

            </div><!-- /End container -->
        </nav><!-- /End navbar -->
    </header>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>