<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazifeladat értékelő oldal</title>
</head>
<body>
<h1>Üdvözlöm a Lala értékelő rendszerében</h1>
    <p>Összes beadott munka: {{ $haziCount }}</p>
    <p>
        <a href="{{ route('hazis.index') }}">Lássuk a házikat</a>
    </p>
</body>
</html>