<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FBD_Test</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <a href="{{route('sort_by_ASC')}}">Tri ASC</a>
        <a href="{{route('sort_by_DESC')}}">Tri DESC</a>
        <table border="1">
            <tr>
                <th>Rank</th>
                <th>Platform</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Publisher</th>
                <th>NA_Sales</th>
                <th>EU_Sales</th>
                <th>Other_Sales</th>
                <th>Global_Sales</th>
            </tr>

            @foreach ($vgData as $d)
            <tr>
                <td>{{ $d->Rank }}</td>
                <td>{{ $d->Platform }}</td>
                <td>{{ $d->Year }}</td>
                <td>{{ $d->Genre }}</td>
                <td>{{ $d->Publisher }}</td>
                <td>{{ $d->NA_Sales }}</td>
                <td>{{ $d->EU_Sales }}</td>
                <td>{{ $d->Other_Sales }}</td>
                <td>{{ $d->Global_Sales }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
