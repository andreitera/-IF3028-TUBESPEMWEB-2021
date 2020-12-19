@extends('Master.master')

@section('content')
<body>
    @if (session('msg'))
    {{ session('msg') }}
    @endif

    <div class="container">
        <div class="content">
            <div class="header">
                <header style="text-align: center;margin: 50px;">
                    <h1>IF SIAGA LAPOR!</h1>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP1NcsHf_auML9glkHz5cIuBjXgz4m_0Mw7Q&usqp=CAU.jpg" alt="Informatika" width="400px" height="150px">
                </header>
            </div>
            <div class="head">
                Buat Laporan/Komentar
            </div>
            <hr>
            <form method="post" action="{{ route('store')}}" enctype="multipart/form-data">
                @csrf
                <div>
                    Pengirim:
                    <input type="text" name="pengirim"><br>
                </div>
                <div>
                    Judul:
                    <input type="text" name="judul"><br>
                </div>
                <div class="main">
                    <textarea rows="10" cols="100" name="laporan" placeholder="Laporan/Komentar" required></textarea>
                </div><br>
                <div class="aspek">
                    <select name="aspek" required>
                        <option value="1">Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option>
                    </select>
                </div><br>
                <div class="file">
                    <input type="file" name="lampiran" required style="display: block; padding-top: 5px;">
                </div><br>
                <div class="btn_submit">
                    <button type="submit" name="buat" style="display: block; padding-top: 5px;">Buat LAPOR!</button>
                </div>
            </form><br>
            <hr>
        </div>
    </div>
</body>

@endsection