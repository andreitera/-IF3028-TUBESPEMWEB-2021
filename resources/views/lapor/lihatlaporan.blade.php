<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>{{$lapor->from}}</p>
    <p>{{$lapor->title}}</p>
    <p>{{$lapor->content}}</p>
    <p>{{$lapor->aspect}}</p>
    <a href="{{$lapor->file}}">File</a>
    <form method="POST" action="{{route('laporcek')}}">
        @csrf
        <label for="">
            Uniqid:
            <input type="text" name="uniqid">
        </label>
        <input type="hidden" name="id" value="{{$lapor->id}}">
        <button type="submit" name="action" value="edit">Edit</button>
        <button type="submit" name="action" value="delete">Hapus</button>
    </form>
</body>

</html>