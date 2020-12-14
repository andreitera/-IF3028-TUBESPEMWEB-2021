<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor</title>
</head>

<body>
    <form method="POST" action="{{ route('laporbuat') }}" enctype="multipart/form-data">
        @csrf
        <label for="">
            Nama:
            <input type="text" name="name">
        </label>
        <label for="" style="display: block;">
            Judul:
            <input type="text" name="title">
        </label>
        <label for="" style="display: block;">
            Content:
            <textarea name="content" rows="4" column="50"></textarea>
        </label>
        <label for="" style="display: block; margin-top: 20px;">
            Aspect:
            <select name="aspect" id="">
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option>
            </select>
        </label>
        <label for="">
            File
            <input type="file" name="filelapor">
        </label>
        <button type="submit">Buat lapor</button>
    </form>
</body>

</html>