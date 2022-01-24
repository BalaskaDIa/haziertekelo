<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hozzáadás</title>
</head>
<body>
    <h1>Új feladat</h1>
    <form method='POST' action="{{ route('hazi.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Név:<br>
            <input type="text" name="nev">
        </div>
        <div>
            Beküldés:<br>
            <input type="date" name="bekuldes">
        </div>
        <div>
            Jegy:<br>
            <input type="number" name="jegy">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>