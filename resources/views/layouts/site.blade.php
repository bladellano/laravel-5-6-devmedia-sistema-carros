<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles Materialize -->
    <link rel="stylesheet" href="{{ asset('lib/materialize/dist/css/materialize.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body id="app">

    <header>
        @include('layouts._site._nav')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias similique quibusdam voluptate soluta vero debitis, sequi, repellat temporibus voluptatem porro facilis repudiandae eum tempora. Quia amet asperiores numquam explicabo accusamus?</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{route('site.home')}}">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{route('site.sobre')}}">Sobre</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{route('site.contato')}}">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

</body>

</html>