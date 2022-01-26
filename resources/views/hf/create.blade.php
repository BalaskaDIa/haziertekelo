<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új házi hozzáadása</title>
</head>
<body>
<h1>Új beadandó</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form method='POST' action="{{ route('hf.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Név:<br>
            <input type="text" name="nev" value="{{ old('nev') }}">
            @error('nev')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Url:<br>
            <input type="text" name="url" value="{{ old('url') }}">
            @error('url')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Dátum:<br>
            <input type="date" name="bekuldes" value="{{ old('bekuldes') }}">
            @error('bekuldes')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
        Jegy:<br>
            <input type="number" name="jegy" value="{{ old('jegy') }}">
            @error('jegy')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
        Értékelés:<br>
            <input type="text" name="ertekeles" value="{{ old('ertekeles') }}">
            @error('ertekeles')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <br>
            <input type="submit" value="Létrehozás">
        </div>
    </form>
    <form action="{{ route('hf.index') }}">
        <br>
        <button type="submit">Vissza</button>
    </form>
    
</body>
</html>