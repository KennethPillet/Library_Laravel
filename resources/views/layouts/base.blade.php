<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <li><a href="/">Home</a></li>
        <li><a href="/list">Liste Livre</a></li>
        <li><a href="/add">Ajouter Livres</a></li>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Kenneth Pillet</p>
    </footer>
</body>
</html>