<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="home.css">
</head>
<style>
    .margin {
    margin: auto 100px auto 100px;
}
.kotak {
    width: 100%;
}

.kaca{
    width: 30px;
    height: 30px;
    margin: auto 0 auto 0;
}

.desc{
    margin: auto 0 auto 0;
}

.input {
    width: 800px;
    height: 30px;
    border-top-left-radius: 45px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 45px;
    vertical-align: bottom;
}

.src {
    width: fit-content;
    height: 37px;
    background: transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 45px;
    border-bottom-right-radius: 45px;
    border-bottom-left-radius: 0px;
    display: inline-flex;
}

.buatlap {
    text-decoration: none;
}
</style>
<body>
    <br><br>
    <div class="margin">
    <center><h1>SIMPLE LAPOR!</h1></center>
    <br><br><br>

    <div class="kotak">
        <center><input type="text" class="input"><button class="src"><img class="kaca" src="kaca.png" alt=""><span class="desc">Cari</span></button></center>
    </div>

    <center><a class="buatlap" href="#">Buat Laporan/Komentar</a></center>

    <p>Laporan/Komentar Terakhir</p>
    <hr>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati dolore,
    velit ullam dignissimos, inventore saepe dolores minus quibusdam voluptatum doloremque
    sunt alias, eos iste aut. Quisquam deleniti cupiditate doloribus officiis. Lorem,
    ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto provident,
    tenetur et inventore similique laboriosam mollitia at minima magni explicabo ab totam
    cumque molestiae, iure soluta eveniet saepe assumenda?</p>
    
    <p>Lampiran:</p>
    </div>
</body>
</html>