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
    <form method='POST' action="{{ route('hazis.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Diák:<br>
            <input type="text" name="diak" value="{{ old('diak') }}">
            @error('diak')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Url kód:<br>
            <input type="text" name="url" value="{{ old('url') }}"> <!--jelenjen meg a https:// izé az input elejébe (kényelmi funció)-->
            @error('url')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="hidden" name="jegy" value="1">
        </div>
        <div>
            <input type="hidden" name="ertekeles" value="nincs"> 
        </div>
        <div>
            <br>
            <input type="submit" value="Create">
        </div>
    </form>
    <form action="{{ route('hazis.index') }}">
        <br>
        <button type="submit">Vissza az előző oldalra</button>
    </form>
</body>
</html>