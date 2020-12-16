<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Laporan</title>
</head>
<body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Detail Laporan/Komentar</p>
    -------------------------------
    <p>{{$report->laporan}}</p>
    <p>{{$report->lampiran}}</p>
    <p>{{$data->created_at}}</p>
    <p>{{$report->aspek}}</p>

    <form action="{{ route('edit', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Edit Laporan/Komentar</button>
    </form>

    <form action="{{ route('delete', $data->id) }}" method="POST">
        @csrf
        <button type="submit">Hapus Laporan/Komentar</button>
    </form>
</body>
</html>