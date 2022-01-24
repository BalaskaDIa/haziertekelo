<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hazi->nev }}</title>
</head>
<body>
    <h1>{{ $hazi->nev }} házi feladata</h1>
    <p>Beküldés dátuma: {{ $hazi->bekuldes }}</p>
    <p>Jegy: {{ $hazi->jegy }} Ft</p>
</body>
</html>