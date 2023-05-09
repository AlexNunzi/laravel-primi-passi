<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra page</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('mainPage') }}">Main</a>
                </li>
                <li>
                    <a href="{{ route('bonusPage') }}">Bonus</a>
                </li>
                <li>
                    <a href="{{ route('extraPage') }}">Extra</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <h3> {{$extra}} </h3>
        <ul>
            @foreach($listDummies as $dummy)
                <li>{{ $dummy }}</li>
            @endforeach
        </ul>
    </main>
</body>
</html>