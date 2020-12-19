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

            <form action="" method="post" class="form-lapor">
                @csrf

                <p>Pilih Tipe Laporan</p>
                <div class="d-flex mb-5">
                    <input type="button" name="type_laporan" class="form-type-lapor" value="Pengaduan">                            
                    <input type="button" name="type_laporan" class="form-type-lapor" value="Aspirian">                            
                    <input type="button" name="type_laporan" class="form-type-lapor" value="Permintaan Informasi">
                </div>

                <input type="text" placeholder="ketik Judul laporan Anda*" name="" class="form-text-box">

                <textarea name="" id="" placeholder="Ketik Isi Laporan Anda" class="form-text-box" rows="5"></textarea>

                <input type="text" onfocus="(this.type='date')" placeholder="Tanggal Kejadian*" name="" class="form-text-box">

                <select name="" id="" class="form-text-box" style="width: 99%">
                    <option value="" disabled selected>Lokasi Kejadian</option>
                    <option value="">Hello</option>
                </select>

                <select name="" id="" class="form-text-box" style="width: 99%">
                    <option value="" disabled selected>Pilih Kategori Laporan Anda</option>
                    <option value="">Hello</option>
                </select>

                <hr style="width: 99%">

                <div class="d-flex space-bettwen">
                    <div class="file">
                        <span>Lampiran</span>
                        <input type="file" name="" id="">
                    </div>
                    <div class="send">
                        <div class="d-flex input-submit">
                            <input type="radio" name="" id="" class="radio-subs"><span class="radio-sub">Anonim</span>
                            <input type="radio" name="" id="" class="radio-subs"><span class="radio-sub">Rahasia</span>
                            <input type="submit" value="Lapor!" class="btn-lapor">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection