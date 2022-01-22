<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hazis->diak }} adatlapja</title>
</head>
<body>
    <h1>Diák: {{ $hazis->diak }}</h1>
    <h3>Érdemjegy: {{ $hazis->jegy}}</h3>
    <p>Url kód: {{ $hazis->url }}</p>
    <p>Szöveges értékelés:<br> {{ $hazis->ertekeles }}</p>
    <form action="{{ route('hazis.edit', $hazis->id) }}">
        <br>
        <button type="submit">Értékelés és modositás</button>
    </form>
    <form action="{{ route('hazis.index') }}">
        <br>
        <button type="submit">Vissza az előző oldalra</button>
    </form>
</body>
</html>