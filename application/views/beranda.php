<html>
    <head>
        <title>Beranda</title>
        <link rel="stylesheet" ttpe="text/css" href="<?php echo base_url('/style/styleBeranda.css'); ?>">
    </head>
    <h1 onclick="location.href='<?php echo base_url()?>'">SIMPLE LAPOR!</h1>
    <br>
    <body>
        <form method="GET" onsubmit=fungsiCar() id="form_cari">
            <input type="text" name="cari" id="cari">
            <button type="submit" id="tombolcari">Cari</button>
        </form>
        <br>
        <table id="tabel1">
        <tr>
            <td><p>Buat Laporan/Komentar</p></td>
            <td><button id="tombolbuat" onclick="location.href='<?php echo base_url().'tambah'?>'">+</button></td>
        </tr>
        </table>
        <p>Komentar/laporan terakhir</p>
        <hr>
        <div id="tampil_data">
            <?php if(!$laporan) echo "<p>Laporan tidak ditemukan</p>"?>
            <?php foreach($laporan as $laporan_item){?>
		    <?php if(strlen($laporan_item['isi']) <= 340){?>
		    	<p align="justify"> <?php echo $laporan_item['isi'];?></p>
		    <?php }else { ?>
            <p align="justify">
                <?php echo substr ($laporan_item['isi'] ,0, 340).'...';?>
            </p>
            <?php }  ?>
            <br>
            <table id="tableKeterangan">
                <tr>
                    <td>
                        <p><?php echo $laporan_item['lampiran']?></p>
                    </td>
                    <td id="waktu">
                        <p> <?php echo $laporan_item['waktu'];?>
                        | <a href="<?php echo base_url().'detail/'.$laporan_item['id']; ?>">
                        Lihat selengkapnya...</a>     
                        </p>
                    </td>
                </tr>    
            </table>
	        <hr>
		    <?php } ?>
        </div>
        <script type="text/javascript">
            function fungsiCar(){
                var input = document.getElementById("cari");
                var inputData = encodeURIComponent(input.value);
            
                var request = new XMLHttpRequest();
                var url = "<?php echo base_url().'cari' ?>";
                url = "<?php echo base_url().'cari' ?>" +"?" + input.name + "=" + inputData;
                request.open("GET", url, true);
                alert("data yang dicari = "+inputData);
                request.send();
            }
        </script>
    </body>
    <footer>
            <p align="center">
            Muhammad Ikram Daffa Ramdhani <br>
            I Wayan Chandra Dinata <br>
            Rafly Rigan Nagachi
            </p>
    </footer>
</html>
