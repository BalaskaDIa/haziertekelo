<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házi feladatok</title>
</head>
<body>
    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>

    <table>
        <tr>
            <th>Név</th>
            <th>Beküldés dátuma</th>
            <th>Jegy</th>
        </tr>
    @foreach ($hazik as $hazi)
        <tr>
            <td>
                <a href="{{ route('hazik.show', $hazik->id) }}">{{ $hazi->nev }}</a>
            </td>
            <td>{{ $hazi->bekuldes }}</td>
            <td>{{ $hazi->jegy }}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>