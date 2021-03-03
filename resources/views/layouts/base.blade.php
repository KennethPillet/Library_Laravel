<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <li><a href="/home">Home</a></li>
        <li><a href="/list">Liste Livre</a></li>
        <li><a href="/add">Ajouter Livres</a></li>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>