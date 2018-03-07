<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acme</title>
    <link rel="stylesheet" href="/basicwebsite/public/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    @yield('content')

    @include('inc.sidebar')

  </body>

</html>
