<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    *{
        box-sizing: border-box;
    }
    body{
    background: #F08080;
    }
   
    </style>
</head>
<body>
    <form action="{{ route('editlaporan', $edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">
        Pengirim:
        <input type="text" name="pengirim" value="{{ $edit->pengirim }}" required>
    </label> <br>
    <label for="">
        Judul:
        <input type="text" name="judul" value="{{ $edit->judul }}" required>
    </label><br>
    <label for="">
        Laporan:
        <textarea name="isilaporan" rows="4" column="50" required></textarea>
    </label><br>
    <label for="">
        Aspek:
        <select name="aspect" id="">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Pengajaran">Pengajaran</option>
            <option value="Infrastruktur">Infrastruktur</option>
        </select>
    </label><br>
    <label for="">
        File:
        <input type="file" name="file">
    </label>
    <button type="submit">Edit Lapor</button>
    </form>
</body>
</html>