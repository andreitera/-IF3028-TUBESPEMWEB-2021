<html>
    <head >
    <meta charset="utf-8">
        <title>
            <?php echo $title; ?>
        </title>

        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js' ?>"></script>
    </head>

    <body>
        <div class="container">
            <h1>SIMPLE LAPOR!</h1>

            <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">

             <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
       
             <input class="button" type="submit" name="submit"  placeholder="cari" value="Cari">	 
       
            </form>

        <a class="buat" href="<?php base_url(); ?>buat">Buat Laporan / Komentar &nbsp<img src="#" height="13px"></a>
        
        <p class="subjudul">Laporan/Komentar Terakhir</p>
        <hr>
    <br>
    <br>
    <div id="target">

    </div>



        </div>


        <script type="text/javascript">
        ambilData();
            function ambilData(){
                 $.ajax({
                     type: 'POST',
                     url: '<?php echo base_url()."index.php/Home/ambildata" ?>', 
                    dataType: 'json',
                    success: function(data){
                        var baris='';
                        for(var i=0; i<data.length; i++){
                            baris+=  '<div>' + data[i].isi_lapor + '</div><br>'+ 
                            '<div class="lampir">'+'<?php echo "Lampiran: ";?>'+data[i].lampiran + '</div>'+
                            '<div class="waktu">'+'<?php echo "Waktu: ";?>'+data[i].waktu+'</div>'+
                            '<hr>';
                        }
                        $('#target').html(baris);

                    }
                 })
            }
        </script>
        
    </body>
</html>