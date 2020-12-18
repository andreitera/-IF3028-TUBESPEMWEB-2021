<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<style>
    body {
        margin: 0;
        padding: 0;
    }

    h1, h6{
        text-align: center;
    }
    h6{
        margin-top: 0;
    }

    .search-container {
        margin-left: 25%;
        margin-right: 25%;
    }
        
    .search-container > input {
        width: 75%;
        padding: 16px;
        border: 1px solid;
        font-weight: bold;
    }
        
    .search-container > input:focus::placeholder {
        font-weight: bold;
    }
        
    .search-container >  input::placeholder {
        color: cornflowerblue;
        font-weight: normal;
    }
        
    .search-container > button {
        width: 23%;
        cursor: pointer;
        padding: 15px;
        border: 1;
    }

    .nav{
        text-align: right;
        background-color: #2E8B57;
        padding: 5px;
        position: sticky;
        top: 0;
    }

    .nav a{
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
        color: white;
    }

    .nav a:hover{
        font-weight: bold;
    }

    .nav li{
        display: inline;
        list-style-type: none;
        margin-right: 20px;
    }
    a{
        text-decoration: none;
        color: black;
    }

</style>
	
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR!</h1>
    <h4>Buat Laporan/Komentar</h4>
   <hr />

   <?php 
   if(validation_errors()):
    echo validation_errors(); 
   endif;
	?>

   <?php echo form_open_multipart('tampilan_ubah.php/Home/ubah/'.$lapor["id"]); ?>
	    <textarea rows="16" cols="136" style="width: 800px;" name="isi" ><?php echo $lapor["isi"]; ?></textarea><br \>
		<select name="aspek">
			<?php foreach ($aspek as $i) { ?>
				<?php if($i == $lapor["aspek"]){ ?>
					<option value="<?= $i; ?>" selected><?= $i; ?></option>
				<?php }else{ ?>
					<option value="<?= $i; ?>"><?= $i; ?></option>
				<?php } ?>

			<?php } ?>
		</select><br />
		<label>File Diwajibkan Dalam Bentuk Gambar / PDF</label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Ubah" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer>
		&copyCopyright 2020 - itera.ac.id
	</footer>

</div>
</body>
</html>