<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>{{ $greeting }} {{ $word }}!!</h1>
    <header>
        <ul>
            @foreach ($pages as $page)
                <li><a href="{{ route("page$page") }}">Pagina {{ $page }}</a></li>
            @endforeach
        </ul>
    </header>
</body>
</html>