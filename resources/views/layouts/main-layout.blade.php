<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La Molisana - Boolean Template</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  @include('partials.header')

  <body>
    @yield('content')
  </body>

  @include('partials.footer')
</html>
