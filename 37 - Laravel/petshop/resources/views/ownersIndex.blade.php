<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owners</title>
</head>
<body>
    @foreach()
        <h3>{{$pet->nome}}</h3>
    @endforeach
</body>
</html>