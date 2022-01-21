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
    <p><u>Url kód:</u> {{ $hazis->url }}</p>
    <p><u>Szöveges értékelés:</u><br> {{ $hazis->ertekeles }}</p>
    <h3><a href="{{ route('hazis.edit', $hazis->id) }}">Adatok módosítása</a></h3>
</body>
</html>