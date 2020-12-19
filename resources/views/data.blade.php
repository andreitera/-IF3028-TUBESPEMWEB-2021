@foreach($data as $DATA)
<div class="list-item">
    <p>{{$DATA->komentar}}</p>

    <div class="list-nav">
        <span>{{$DATA->file}}</span>
        <span class="nav1">Waktu {{$DATA->waktu}} <a href="/detail/{{$DATA->id}}">Lihat Selengkapnya ></a></span>
    </div>

    <hr>
</div>
    @endforeach
