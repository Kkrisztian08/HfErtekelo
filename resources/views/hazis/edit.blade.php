<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{ $hazis->diak }} adatainak szerkesztése</h1>
    <form method='POST' action="{{ route('hazis.update', $hazis->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Diák:<br>
            <input type="text" name="diak" value="{{ $hazis->diak }}">
        </div>
        <div>
            Url:<br>
            <input type="text" name="url" value="{{ $hazis->url }}">
        </div>
        <div>
            Jegy:<br>
            <input type="number" name="jegy" value="{{ $hazis->jegy }}">
        </div>
        <div>
            Értékelés:<br>
            <input type="text" name="ertekeles" value="{{ $hazis->ertekeles }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
        
    </form>
</body>
</html>