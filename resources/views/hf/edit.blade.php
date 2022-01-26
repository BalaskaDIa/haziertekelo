<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módosítás</title>
</head>
<body>
<h1>{{ $hazis->nev }} munkájának értékelése</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form method='POST' action="{{ route('hf.update', $hazis->id) }}">
        @csrf
        @method('PATCH')
        <div>
            <input type="hidden" name="nev" value="{{ $hazis->nev }}">
        </div>
        <div>
            <input type="hidden" name="bekuldes" value="{{ $hazis->bekuldes }}">
        </div>
        <div>
            Jegy:<br>
            <input type="number" name="jegy" value="{{ $hazis->jegy }}">
            @error('jegy')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="ertekeles" value="{{ $hazis->ertekeles }}">
            @error('ertekeles')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <br>
            <input type="submit" value="Edit">
        </div> 
    </form>
    <form action="{{ route('hf.show', $hazis->id) }}">
        <br>
        <button type="submit">Vissza</button>
    </form>
</body>
</html>