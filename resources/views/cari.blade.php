@foreach ($data as $item)
    <div>
        <p>
            {{ $item->contents }}
        </p>
        <?php $a = explode("/", $item->file); ?>
        <div class="lampiran">
            <p>Lampiran: {{ count($a) == 2 ? $a[1] : "" }}</p>
        </div>

        <div class="waktu">
            <p>Waktu: {{ $item->created_at }}</p>
        </div>
        <div class="lihat" onclick="detail({{$item->id}})">
            <p>Lihat Selengkapnya ></p>
        </div>

        <div class="clearfix"></div>
        <hr />
    </div>
@endforeach
