<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>NesoHost - Image Hosting</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            background-color: #000;
        }

        .jumbotron {
            background-color: #181818;
            color: whitesmoke;
        }
    </style>
  </head>
  <body>
    <div class="container text-center mt-5">
        <div class="jumbotron">
            @yield('content')
        </div>

        <div class="mb-3">
          &copy; {{ date('Y') }} <b>Maciej Schmidt</b><br />
          Follow me on: <a class="text-dark" href="https://twitter.com/Macsch15"><b>Twitter</b></a> and <a class="text-dark" href="https://github.com/Macsch15"><b>GitHub</b></a>
        </div>
    </div>

  </body>
</html>
