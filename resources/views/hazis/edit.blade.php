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
            Jegy:
            <select name="jegy">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            
        </div>
        <div>
            Szöveges értékelés:<br>
            <textarea name="ertekeles">{{ $hazis->ertekeles }}</textarea>
            <!--<input type="text" name="ertekeles" value="{{ $hazis->ertekeles }}">-->
            @error('ertekeles')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <br>
            <input type="submit" value="Értékelés">
        </div> 
    </form>
    <form action="{{ route('hazis.show', $hazis->id) }}">
        <br>
        <button type="submit">Vissza az előző oldalra</button>
    </form>
</body>
</html>