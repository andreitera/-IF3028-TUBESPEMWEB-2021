@extends('Lapor.layout.master')


@section('content')
    <div class="cover d-flex">
        <div class="covercontent d-flex flex-end">
            <div class="profilepictureborder">
                <img src="{{ asset('asset/images/user-icon.png') }}" alt="" srcset="" class="profilepicture">
            </div>
            <h2>Leonard Rizta Anugerah Perdana</h2>
        </div>
        <div class="row flex-end">
            <div class="mb-16 mr-16">
                <div>
                    <b>
                        <div class="text-center">0</div>
                        <div>Laporan</div>
                    </b>
                </div>
            </div>
            <div class="mb-16 border-button">
                <a href="#" class="changecover">UBAH</a>
            </div>
        </div>
    </div>
    <div class="content-parent">
        <div class="content">
            <div class="row">
                <p><a href="#">Semua</a></p>
                <p><a href="#">Belum</a></p>
                <p><a href="#">Proses</a></p>
                <p><a href="#">Selesai</a></p>
            </div>
            <hr>
        </div>
        <aside>
            <p>Instansi Terhangat</p>
            <div class="row align-content-center">
                <img src="{{ asset('asset/images/institution-placeholder.png') }}" alt="" class="institution-logo flex-center">
                <p class="align-center ml-16 flex-center" id="institution-name">Pemerintah Provinsi DKI Jakarta</p>
                <img src="{{ asset('asset/images/google-docs.png') }}" alt="" class="document-logo flex-center">
                <p class="flex-center">51.8k</p>
            </div>
            <div class="row align-content-center">
                <img src="{{ asset('asset/images/institution-placeholder.png') }}" alt="" class="institution-logo flex-center">
                <p class="align-center ml-16 flex-center" id="institution-name">Tim Sosialisasi KKS</p>
                <img src="{{ asset('asset/images/google-docs.png') }}" alt="" class="document-logo flex-center">
                <p class="flex-center">50.3k</p>
            </div>
            <div class="row align-content-center">
                <img src="{{ asset('asset/images/institution-placeholder.png') }}" alt="" class="institution-logo flex-center">
                <p class="align-center ml-16 flex-center" id="institution-name">Tim Sosialisasi Kebijakan Penyesuaian Subsidi BBM</p>
                <img src="{{ asset('asset/images/google-docs.png') }}" alt="" class="document-logo flex-center">
                <p class="flex-center">40.4k</p>
            </div>
        </aside>
    </div>
@endsection