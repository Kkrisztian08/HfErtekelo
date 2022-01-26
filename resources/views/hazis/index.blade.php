<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házik Listája</title>
</head>
<body>
    <table>
        <tr>
            <th>Diák</th>
            <th>A házifeladat Url kódja</th>
            <th>Érdemjegy</th>
            <th>Szöveges értékelés</th>
        </tr>
        @foreach ($hazis as $hazi)
        <tr>
            <td>
                <a href="{{ route('hazis.show', $hazi->id) }}">{{ $hazi->diak }}</a>
            </td>
            <td>{{ $hazi->url }}</td>
            <td>{{ $hazi->jegy }}</td>
            <td>{{ $hazi->ertekeles }}</td>
            <td>
                <form method="POST" action="{{ route('hazis.destroy', $hazi->id) }}">
                    @csrf
                    @method('DELETE')
                    <button>Törlés</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <form action="{{ route('hazis.create') }}">
        <br>
        <button type="submit">Új házifeladat hozzáadása</button>
    </form>
    <form action="{{ route('home') }}">
        <br>
        <button type="submit">Vissza a főoldalra</button>
    </form>
</body>
</html>