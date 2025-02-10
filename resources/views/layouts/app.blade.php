<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 font-sans">
    @include('includes.header')
    <div class="mx-auto">

        @yield('content')

    </div>
    @include('includes.footer')
</body>
</html>
