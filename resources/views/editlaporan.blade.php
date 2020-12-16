<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Laporan/Komentar</title>
</head>
<body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Buat Laporan/Komentar</p>
    ---------------------------------
    <form action="{{ route('storeedit', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="textarea" name="laporan" value="{{$data->laporan}}" autocomplete="off" style="display: block; padding-top: 5px;">
        <select name="aspek" value="{{$data->aspek}}" style="display: block; padding-top: 5px;">
                <option value="1">Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen">Dosen</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option> 
            </select>
            <!-- <input type="file" name="lampiran" required style="display: block; padding-top: 5px;"> -->
            <button type="submit" style="display: block; padding-top: 5px;">Ganti LAPOR!</button>
            --------------------------------------
    </form>
</body>
</html>