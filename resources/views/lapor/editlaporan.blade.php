<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor</title>
</head>

<body>
    <form method="POST" action="{{ route('laporupdate', $lapor->unique_id) }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="name" value="{{$lapor->unique_id}}">
        <label for="">
            Nama:
            <input type="text" name="name" value="{{$lapor->from}}">
        </label>
        <label for="" style="display: block;">
            Judul:
            <input type="text" name="title" value="{{$lapor->title}}">
        </label>
        <label for="" style="display: block;">
            Content:
            <textarea name="content" rows="4" column="50">{{$lapor->content}}</textarea>
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
            <input type="file" name="filelapor" value="{{$lapor->file}}">
        </label>
        <button type="submit">Edit lapor</button>
    </form>
</body>

</html>