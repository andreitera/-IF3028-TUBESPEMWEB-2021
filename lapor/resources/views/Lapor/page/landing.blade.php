@extends('Lapor.layout.masterlanding')

@section('css')
<link rel="stylesheet" href=" {{ asset('asset/css/listStyle.css') }} ">
<link rel="stylesheet" href=" {{ asset('asset/css/landingStyle.css') }} ">
@endsection

@section('content')
    <section id="formLaporan">
        <div class="bg-card-white lapor">
            <div class="title-lapor">
                <p>Sampaikan Laporan Anda</p>
            </div>

            <form action="{{ route('post.lapor') }}" method="post" class="form-lapor">
                @csrf

                <p>Pilih Tipe Laporan</p>
                <div class="d-flex mb-5">
                     {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1"> Pengaduan                            
                     {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="2"> Aspirian                            
                     {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="3 Informasi"> Permintaan Informasi 
                </div>

                <input type="text" placeholder="ketik Judul laporan Anda*" name="title" class="form-text-box">

                <textarea name="laporan" id="" placeholder="Ketik Isi Laporan Anda" class="form-text-box" rows="5"></textarea>

                {{-- onfocus="(this.type='date')" --}}<input type="date" placeholder="Tanggal Kejadian*" name="tgl_kejadian" class="form-text-box">

                <select name="location" id="" class="form-text-box" style="width: 99%">
                    <option value="" disabled selected>Lokasi Kejadian</option>
                    @foreach ($listLokasi as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>

                <select name="instansi_tujuan" id="" class="form-text-box" style="width: 99%">
                    <option value="" disabled selected>Instansi Tujuan</option>
                    @foreach ($listInstansi as $instansi)
                        <option value="{{$instansi->id}}">{{$instansi->name}}</option>
                    @endforeach
                </select>

                <select name="category" id="" class="form-text-box" style="width: 99%">
                    <option value="" disabled selected>Pilih Kategori Laporan Anda</option>
                    @foreach ($listKategori as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                    @endforeach
                </select>

                <hr style="width: 99%">

                <div class="d-flex space-bettwen">
                    <div class="file">
                        <span>Lampiran</span>
                        <input type="file" name="lampiran" id="">
                    </div>
                    <div class="send">
                        <div class="d-flex input-submit">
                            <input type="radio" name="anonim" id="" value="1" class="radio-subs"><span class="radio-sub">Anonim</span>
                            <input type="radio" name="rahasia" id="" value="0" class="radio-subs"><span class="radio-sub">Rahasia</span>
                            <input type="submit" value="Lapor!" class="btn-lapor">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection