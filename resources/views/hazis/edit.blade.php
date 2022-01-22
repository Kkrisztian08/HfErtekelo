<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{ $hazis->diak }} munkájának értékelése</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form method='POST' action="{{ route('hazis.update', $hazis->id) }}">
        @method('PATCH')
        @csrf
        <div>
            <input type="hidden" name="diak" value="{{ $hazis->diak }}">
        </div>
        <div>
            <input type="hidden" name="url" value="{{ $hazis->url }}">
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
    <h3><a href="{{ route('hazis.show', $hazis->id) }}">Vissza az előző oldalra</a></h3>
</body>
</html>