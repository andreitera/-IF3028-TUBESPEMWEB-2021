@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('isi')
<div class="form-buat">
    <form method="POST" action="{{ route('laporupdate', $lapor->unique_id) }}" enctype="multipart/form-data" class="form">
        Edit Laporan/Komentar
        <div class="bar"></div>
        <input type="hidden" name="name" value="{{ $lapor->unique_id }}">
        <textarea id="laporan" name="laporan">{{ $lapor->content}}</textarea>
        {{-- <textarea id="laporan" name="laporan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatem voluptatum placeat ex consequuntur vero iusto. Magnam, ratione! Nostrum eius sunt esse repudiandae dignissimos cupiditate dicta vel, consequatur tempora, omnis quia? Aut, distinctio architecto iure enim assumenda et exercitationem eligendi est, laborum aspernatur quasi laudantium dolorum autem! Illo nesciunt rem vero quod similique eligendi, porro veniam id explicabo optio. Quis, ad magni? Laborum est maxime sunt voluptatem impedit deserunt necessitatibus ut numquam animi veniam architecto, quia dolorum ipsam minima fuga velit? Autem, dignissimos illo natus incidunt molestias magni deserunt laborum sed voluptatem tempore doloremque nobis quo enim blanditiis quam odit?</textarea> --}}
        <select name="aspek" id="aspek">
            <option value="Dosen">Dosen</option>
            <option value="Mata Kuliah">Mata Kuliah</option>
            <option value="Prodi">Prodi</option>
        </select>
        <br>
        <input type="button" value="Choose File" onclick="document.getElementById('pic').click()" class="btn">
        <input type="text" id="filename" value="No File Choosen">
        <input type="file" id="pic" name="pic" style="display:none" onchange="document.getElementById('filename').value=this.value">
        <div class="container">
            <button id="batal" class="btn" style="margin-right: 20px">Batal</button>
            <button id="submit" class="btn">Ubah LAPOR!</button>
        </div>
        <div class="bar"></div>
    </form>
</div>
@endsection

@section('jsbawah')
    
@endsection