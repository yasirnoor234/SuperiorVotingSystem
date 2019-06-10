<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucfirst(config('multiauth.prefix')) }} Panel</title>
    <link href="/images/avatar.png" rel="icon" type="img/icon">

</head>

<body>
    <div id="app">
  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>