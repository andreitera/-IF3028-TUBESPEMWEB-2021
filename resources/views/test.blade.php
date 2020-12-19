<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Document</title>
    <script>
        function create() {
            event.preventDefault();
            var xml = new XMLHttpRequest();
            var data = {
                from: "nama",
                title: "",
                contents: "",
                aspect: ""
            };
            data.from = document.getElementById('from').value;
            data.title = document.getElementById('title').value;
            data.contents = document.getElementById('contents').value;
            data.aspect = document.getElementById('aspect').value;
            axios.post('create', data).then(function(response){
                console.log(response);
                var dat = response.data;
                document.getElementById("token").innerHTML = dat.token;
            });
        }
        function update() {
            event.preventDefault();
            var data = {token: "asdasd" };
            data.token = document.getElementById("cek").value;
            axios.post('edit', data).then(function(response){
                console.log(response);
                document.getElementById("token").innerText = JSON.stringify(response.data);
            });
        }
        function showing() {
            event.preventDefault();
            var data = {id: "asdasd" };
            data.id = document.getElementById("show").value;
            axios.post('show', data).then(function(response){
                console.log(response);
                document.getElementById("token").innerText = JSON.stringify(response.data);
            });
        }
        function erase() {
            event.preventDefault();
            var data = {token: "asdasd" };
            data.token = document.getElementById("delete").value;
            axios.post('delete', data).then(function(response){
                console.log(response);
                document.getElementById("token").innerText = JSON.stringify(response.data);
            });
        }
    </script>
</head>
<body>
    <form>
        @csrf
        <b>Dari : </b> <input type="text" name="nama" id="from"><br>
        <b>Title : </b> <input type="text" name="nama" id="title"><br>
        <b>Content : </b> <input type="text" name="nama" id="contents"><br>
        <b>Aspect : </b>
        <select name="" id="aspect">
            <option value="Dosen">Dosen</option>
        </select><br>
        <button type="submit" onclick="create()">Submit</button>
    </form>
    <br>
    <form>
        <input type="text" name="" id="cek">
        <button type="submit" onclick="update()">Cek</button>
    </form>
    <br>
    <form>
        <input type="text" name="" id="show">
        <button type="submit" onclick="showing()">Show</button>
    </form>
    <br>
    <form>
        <input type="text" name="" id="delete">
        <button type="submit" onclick="erase()">Delete</button>
    </form>
    <br>
    <b id="token"></b>
</body>
<script>
    const element = document.querySelector('form');
    element.addEventListener('submit', event => {
        console.log('Form submission cancelled.');
        event.preventDefault();
        // actual logic, e.g. validate the form
    });
</script>
</html>
