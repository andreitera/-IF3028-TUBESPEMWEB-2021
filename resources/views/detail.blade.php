<style>
    #root{
        background-color: white;
        box-shadow: 0 0 5px grey;
        padding: 50px 40px;
        box-sizing: border-box;
        font-family: 'Poppins';
        margin-bottom: 100px;
    }
    .time{
        margin-right: 30px;
        font-weight: bold;
    }
    .fontx{
        font-size: 28px;
        font-weight: bold;
    }
    .edit{
        margin-left: auto;
        /* display: block; */
        /* width: fit-content; */
        float: right;
        /* text-shadow: 0 0 grey; */
        color: rgb(37 35 183);
        cursor: pointer;
    }
    .hapus {
        float: right;
        margin-right: 6px;
        color: rgb(199 18 18);
        cursor: pointer;
    }

    .clearfix {
        clear: both;
    }
</style>
<span class='fontx'>Detail Laporan/Komentar</span>
<hr><br>

<p>{{$data->contents}}</p>
<br>
<p>Lampiran: </p>
<img src="{{asset($data->file)}}" alt="">
<br>
<br>
<div clas="detail">
    <span class="time">Waktu: {{$data->created_at}}</span>
    <span class="aspek">Aspek: {{$data->aspect}}</span>
    <span class="edit" onclick="edit({{$data->id}})">Edit</span>
    <span class="hapus" onclick="hapus({{$data->id}})" id="apus_gaes">Hapus | </span>
</div>
<hr>
<script>

</script>
