<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>laporan</th>
            <th>aspek</th>
            <th>file</th>
        </tr>
        <?php foreach ($data as $d) {
            echo "<tr>";
            echo "<td>" . $d['id'] . "</td>";
            echo "<td>" . $d['laporan'] . "</td>";
            echo "<td>" . $d['aspek'] . "</td>";
            echo "<td>" . $d['file'] . "</td>";
            echo "</tr>";
        } ?>
    </table>
</body>

</html>