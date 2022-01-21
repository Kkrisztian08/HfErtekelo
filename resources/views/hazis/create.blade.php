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
            <input type="text" name="url" value="{{ old('url') }}">
            @error('url')
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
            <input type="submit" value="Create">
        </div>
    </form>
    
</body>
</html>