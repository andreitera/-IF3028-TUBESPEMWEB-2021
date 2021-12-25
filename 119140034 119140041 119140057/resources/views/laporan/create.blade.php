@extends('template')

@section('content')
    <div id="header">
        <h1>Layanan Pengaduan Prodi Teknik Informatika</h1>
    </div>
    <div class="judulKecil">input Aspirasi atau Pengaduan </div>
    <div id="wrapper">
        <form id="create" name="create" action="{{ route('laporan.store') }}" method="post" enctype="multipart/form-data" onsubmit="return validating()">
            @csrf
            <textarea name="isi" id="isi_konten" cols="30" rows="10"></textarea>
            <br>
            <div class="flex-container">
            <Select id="dropdown" name="id_aspek">
                @foreach ($aspek as $data)
                <option value="{{$data->id_aspek}}">{{$data->nama_aspek}}</option>
                @endforeach
            </Select>
            </div>
            <br>
            <div class="flex-container">
            <input type="file" name="file" id="formUpload"  accept="image/x-png,image/gif,image/jpeg">
            </div>
            <br>
            <div class="flex-container-end">
            <button id="laporBtn" type="submit">Submit</button>
            </div>
        </form>
        @if(session('msg'))
            <div>
                {{session('msg')}}
            </div>
        @endif
    </div>
    <script>
        function validating() {
          var x = document.forms["create"]["isi"].value;
          var len = $('#create').val().split(" ").length;
          if (x == "" || len < "20") {
            alert("Name must be filled out");
            return false;
          }
        } 
    </script>
@endsection
