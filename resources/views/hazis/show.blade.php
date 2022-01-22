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
    <h3><a href="{{ route('hazis.edit', $hazis->id) }}">Értékelés és modositás</a></h3>
    <h3><a href="{{ route('hazis.index') }}">Vissza az előző oldalra</a></h3>
</body>
</html>