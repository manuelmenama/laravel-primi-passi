<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing page</title>
</head>
<body>

    <h1>Operatori</h1>


    <ul>
        @foreach ($operators as $operator)
            <li>
                <ul>
                    <li>
                        {{ $operator['nome'] }}
                    </li>
                    <li>
                        {{ $operator['cognome'] }}
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>

</body>
</html>
