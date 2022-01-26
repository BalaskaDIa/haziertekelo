<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hazis->nev }}</title>
</head>
<body>
    <h1>{{ $hazis->nev }} házi feladata</h1>
    <p>Beküldés dátuma: {{ $hazis->bekuldes }}</p>
    <p>Jegy: {{ $hazis->jegy }}</p>
    <p>Szöveges értékelés:<br> {{ $hazis->ertekeles }}</p>
    <form action="{{ route('hf.edit', $hazis->id) }}">
        <br>
        <button type="submit">Értékelés</button>
    </form>
    <form action="{{ route('hf.index') }}">
        <br>
        <button type="submit">Vissza</button>
    </form>
</body>
</html>