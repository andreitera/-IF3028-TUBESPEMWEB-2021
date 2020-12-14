<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>

<body>
    <form method="GET" action="{{ route('sendemail') }}">
        @csrf
        <p>{{$uniqid}}</p>
        <input type="hidden" name="uniqid" value="{{$uniqid}}">
        <label for="">
            Email:
            <input type="text" name="email">
            <button type="submit">Kirim</button>
        </label>
    </form>
</body>

</html>