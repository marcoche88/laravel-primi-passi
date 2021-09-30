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
            <li><a href="{{ route('page1') }}">Pagina 1</a></li>
            <li><a href="{{ route('page2') }}">Pagina 2</a></li>
            <li><a href="{{ route('page3') }}">Pagina 3</a></li>
        </ul>
    </header>
</body>
</html>