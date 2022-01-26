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
            <th>Url</th>
            <th>Jegy</th>
            <th>Értékelés</th>
        </tr>
    @foreach ($hazis as $hazi)
        <tr>
            <td>
                <a href="{{ route('hf.show', $hazi->id) }}">{{ $hazi->nev }}</a>
            </td>
            <td>{{ $hazi->bekuldes }}</td>
            <td>{{ $hazi->url }}</td>
            <td>{{ $hazi->jegy }}</td>
            <td>{{ $hazi->ertekeles }}</td>
            <td>
                <form method="POST" action="{{ route('hf.destroy', $hazi->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
            </form> 
            </td>
        </tr>
    @endforeach
    </table>
    <form action="{{ route('hf.create') }}">
        <br>
        <button type="submit">Új házi feladat hozzáadása</button>
    </form>
</body>
</html>