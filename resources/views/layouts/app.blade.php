<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>@yield('page-title')</title>
</head>

<body>

    <main>
        <div class="container">
            <div class="row">

                @yield('page-content')

            </div>
        </div>
    </main>

</body>

</html>
