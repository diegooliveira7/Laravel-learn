<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$subtitulo}}</h1>

    <ul>
        @foreach($cidades as $cidade)

            <li>{{$cidade}}</li>

        @endforeach
    </ul>

</body>
</html>
