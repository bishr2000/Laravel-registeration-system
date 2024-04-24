<!DOCTYPE html>

<html lang = "ar">

    <head>
        <title>
            @yield('title')
        </title>
        <meta charset="utf-8">
        <link href = '{{ URL::asset('assets/css/app.css')}}' rel = 'stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body lang = "ar" dir = "rtl">
        @include('inc.nav')
        <div class="container">
            @yield('content')
        </div>

        <script src = "{{ URL::asset('assets/js/capScript.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
