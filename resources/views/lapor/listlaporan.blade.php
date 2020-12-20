<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list laporan</title>
</head>

<body>
    @if (session('msg'))
    <div>
        {{ session('msg') }}
    </div>
    @endif
    <table border="1">
        @foreach ($lapor as $lapor)
        <tr>
            <td>{{$lapor->from}}</td>
            <td>{{$lapor->file}}</td>
            <td><a href="{{ route('laporShow', $lapor->id) }}">lihat</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>