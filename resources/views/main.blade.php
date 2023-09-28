
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>@yield('title', 'Статьи')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        @include('layouts.header')
        @include('layouts.nav')
    </div>
    <main role="main" class="container">
        <div class="row">

            @yield('content')
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>