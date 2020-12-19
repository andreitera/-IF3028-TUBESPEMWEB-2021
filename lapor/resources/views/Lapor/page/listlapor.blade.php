@extends('Lapor.layout.master')

@section('css')
    <link rel="stylesheet" href=" {{ asset('asset/css/listStyle.css') }} ">
@endsection

@section('content')
    <div class="backgrond-red"></div>
    <div class="container content-list-lapor">
        <div class="d-flex">
            <div class="col-8">
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

                <br><br>

                {{-- start List Lapor --}}
                @foreach ($listLapor as $data)
                    <div class="listLapor">
                        <div class="account-info">
                            <div class="d-flex"> {{-- d-flex content list lapor --}}
                                <div class="img-user">
                                    <img src="{{ asset('asset/images/user-placeholder-m.png') }}" width="50px" height="50px" alt="user-Profile">
                                </div>
                                <div class="information-list-lapor">
                                    <div class="account d-flex space-bettwen w-50 p-3">
                                        <div class="nama-account">
                                            <p><a href="#">{{ $data->users->name }}</a></p>
                                            <div class="d-flex status-lapor">
                                                <p class="d-flex">
                                                    <img class="icons" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0NDMuMjk0IDQ0My4yOTQiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNDQzLjI5NCA0NDMuMjk0IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMjEuNjQ3IDBjLTEyMi4yMTQgMC0yMjEuNjQ3IDk5LjQzMy0yMjEuNjQ3IDIyMS42NDdzOTkuNDMzIDIyMS42NDcgMjIxLjY0NyAyMjEuNjQ3IDIyMS42NDctOTkuNDMzIDIyMS42NDctMjIxLjY0Ny05OS40MzMtMjIxLjY0Ny0yMjEuNjQ3LTIyMS42NDd6bTAgNDE1LjU4OGMtMTA2Ljk0MSAwLTE5My45NDEtODctMTkzLjk0MS0xOTMuOTQxczg3LTE5My45NDEgMTkzLjk0MS0xOTMuOTQxIDE5My45NDEgODcgMTkzLjk0MSAxOTMuOTQxLTg3IDE5My45NDEtMTkzLjk0MSAxOTMuOTQxeiIvPjxwYXRoIGQ9Im0yMzUuNSA4My4xMThoLTI3LjcwNnYxNDQuMjY1bDg3LjE3NiA4Ny4xNzYgMTkuNTg5LTE5LjU4OS03OS4wNTktNzkuMDU5eiIvPjwvc3ZnPg==" /> 
                                                    Online
                                                </p>
                                                <p>
                                                    {{-- <img class="icons" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjQwNS4yNzJweCIgaGVpZ2h0PSI0MDUuMjcycHgiIHZpZXdCb3g9IjAgMCA0MDUuMjcyIDQwNS4yNzIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQwNS4yNzIgNDA1LjI3MjsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTM5My40MDEsMTI0LjQyNUwxNzkuNjAzLDMzOC4yMDhjLTE1LjgzMiwxNS44MzUtNDEuNTE0LDE1LjgzNS01Ny4zNjEsMEwxMS44NzgsMjI3LjgzNg0KCQljLTE1LjgzOC0xNS44MzUtMTUuODM4LTQxLjUyLDAtNTcuMzU4YzE1Ljg0MS0xNS44NDEsNDEuNTIxLTE1Ljg0MSw1Ny4zNTUtMC4wMDZsODEuNjk4LDgxLjY5OUwzMzYuMDM3LDY3LjA2NA0KCQljMTUuODQxLTE1Ljg0MSw0MS41MjMtMTUuODI5LDU3LjM1OCwwQzQwOS4yMyw4Mi45MDIsNDA5LjIzLDEwOC41NzgsMzkzLjQwMSwxMjQuNDI1eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /> --}}
                                                    {{ $data->libraries_status_id->name}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tanggal-buat float-right">
                                            <span>{{ date('d M Y', strtotime($data->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="lapor-data p-3">
                                        <p>Terdisposisi ke <a href="#"><b> {{$data->provinces->name}} </b></a></p>

                                        <h2><a href="{{ route('viewLapor', $data->id) }}"> {{ $data->title }} </a></h2>

                                        <p class="w-50"> {{ $data->laporan }}  <a href="{{ route('viewLapor', $data->id) }}">Selengkapnya...</a> </p>
                                    
                                        <div class="date-tag d-flex">
                                            <span>{{ date('d M Y', strtotime($data->updated_at)) }}</span>
                                            <span>#{{ $data->libraries_category_id->name }}</span>
                                        </div>
                                        
                                        {{-- <div class="lampiran d-flex">
                                            <img src="{{ asset('asset/images/user-cover.png') }}" alt="lampiran" width="100px" height="100px">
                                            <img src="{{ asset('asset/images/user-cover.png') }}" alt="lampiran" width="100px" height="100px">
                                        </div> --}}
                                    </div>
                                </div>
                            </div> {{-- end d-flex content list lapor --}}
                            {{-- d-flex for action list lapor --}}
                            <div class="d-flex action-lapor">
                                <p>#{{$data->id}}</p>
                                <p>
                                    <a href=" {{ route('viewLapor', $data->id) }}">
                                        <img class="icons" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjk5OSA1MTEuOTk5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuOTk5IDUxMS45OTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTEwLjE1Niw0MDEuODQzTDQ4MC40MTksMzE1LjNjMTQuMzM0LTI5LjMwMiwyMS45MDktNjEuODksMjEuOTYtOTQuNjc5YzAuMDg4LTU3LjAxMy0yMS45Ny0xMTAuOTItNjIuMTEyLTE1MS43OQ0KCQkJQzQwMC4xMTcsMjcuOTUzLDM0Ni42MTUsNC45NDIsMjg5LjYxNSw0LjAzOUMyMzAuNTEsMy4xMDUsMTc0Ljk1NCwyNS41ODcsMTMzLjE4Nyw2Ny4zNTMNCgkJCWMtNDAuMjc0LDQwLjI3My02Mi42MTIsOTMuMzY2LTYzLjMxOSwxNTAuMTAyQzMwLjE3NCwyNDcuMzQxLDYuNzQ1LDI5My45MzYsNi44MjIsMzQzLjcwNQ0KCQkJYzAuMDM3LDIzLjI5LDUuMjc5LDQ2LjQ0MSwxNS4yMTIsNjcuMzc2TDEuNTUxLDQ3MC42ODljLTMuNTIxLDEwLjI0Ny0wLjk0OSwyMS4zNzMsNi43MTMsMjkuMDM1DQoJCQljNS4zOTIsNS4zOTMsMTIuNTAxLDguMjY0LDE5LjgxMiw4LjI2NGMzLjA3NiwwLDYuMTg4LTAuNTA4LDkuMjIzLTEuNTUxbDU5LjYwOS0yMC40ODNjMjAuOTM1LDkuOTMzLDQ0LjA4NiwxNS4xNzUsNjcuMzc2LDE1LjIxMg0KCQkJYzAuMDg0LDAsMC4xNjQsMCwwLjI0OCwwYzUwLjUxLTAuMDAyLDk3LjQ2LTI0LjAzNSwxMjcuMjM3LTY0LjcwMmMzMC45ODctMC44MTYsNjEuNjQ2LTguMzE3LDg5LjM2My0yMS44NzZsODYuNTQ0LDI5LjczOA0KCQkJYzMuNjA2LDEuMjM5LDcuMzA0LDEuODQzLDEwLjk1OSwxLjg0M2M4LjY4OCwwLDE3LjEzNi0zLjQxMiwyMy41NDUtOS44MjJDNTExLjI4NCw0MjcuMjQyLDUxNC4zNCw0MTQuMDIxLDUxMC4xNTYsNDAxLjg0M3oNCgkJCSBNMTY0LjUzLDQ3MC42OWMtMC4wNjUsMC0wLjEzNCwwLTAuMTk5LDBjLTIwLjYxNC0wLjAzMS00MS4wODUtNS4xMTMtNTkuMTk2LTE0LjY5NWMtMy43MjQtMS45NjktOC4wOTYtMi4zMS0xMi4wNzgtMC45NDINCgkJCWwtNjEuMTIzLDIxLjAwM2wyMS4wMDMtNjEuMTIyYzEuMzY4LTMuOTgzLDEuMDI4LTguMzU1LTAuOTQyLTEyLjA3OGMtOS41ODItMTguMTEyLTE0LjY2NC0zOC41ODItMTQuNjk2LTU5LjE5Nw0KCQkJYy0wLjA1MS0zMy4xNTksMTIuODQ4LTY0LjU4OCwzNS40MDUtODguMTIyYzcuMzY4LDQ0LjkxNiwyOC43NzUsODYuMzA2LDYxLjk1NywxMTguODk4DQoJCQljMzIuOTM3LDMyLjM1MSw3NC4zMzksNTIuOTQ5LDExOS4wMTEsNTkuNjgzQzIzMC4wODQsNDU3LjM2NywxOTguMjg4LDQ3MC42OSwxNjQuNTMsNDcwLjY5eiBNNDgwLjYyOCw0MTQuNzk3DQoJCQljLTAuODY3LDAuODY3LTEuODk1LDEuMTAzLTMuMDUxLDAuNzA1bC05Mi42NDgtMzEuODM2Yy0xLjYwOS0wLjU1My0zLjI4My0wLjgyNy00Ljk1MS0wLjgyN2MtMi40NTksMC00LjkwOSwwLjU5NS03LjEyNiwxLjc2OQ0KCQkJYy0yNi40NTMsMTMuOTk0LTU2LjM0NSwyMS40MTYtODYuNDQ3LDIxLjQ2MmMtMC4wOTksMC0wLjE4OSwwLTAuMjg4LDBjLTEwMC44NjMsMC0xODQuMTc2LTgxLjkzNC0xODUuNzc0LTE4Mi43NzMNCgkJCWMtMC44MDUtNTAuNzg1LDE4LjUxMy05OC41MTQsNTQuMzk0LTEzNC4zOTVjMzUuODgxLTM1Ljg4MSw4My42MTgtNTUuMTkyLDEzNC4zOTYtNTQuMzkyDQoJCQljMTAwLjkzNiwxLjYwMSwxODIuOTI2LDg1LjA2OCwxODIuNzcsMTg2LjA2M2MtMC4wNDcsMzAuMTAyLTcuNDY4LDU5Ljk5NS0yMS40NjEsODYuNDQ2Yy0xLjk3LDMuNzIzLTIuMzEsOC4wOTUtMC45NDIsMTIuMDc4DQoJCQlsMzEuODM1LDkyLjY0OEM0ODEuNzMyLDQxMi45MDUsNDgxLjQ5NCw0MTMuOTMyLDQ4MC42MjgsNDE0Ljc5N3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTM3Ni44OTIsMTM5LjUxMmgtMTgxLjU2Yy04LjQxNiwwLTE1LjIzOCw2LjgyMy0xNS4yMzgsMTUuMjM4YzAsOC40MTYsNi44MjMsMTUuMjM4LDE1LjIzOCwxNS4yMzhoMTgxLjU2DQoJCQljOC40MTYsMCwxNS4yMzgtNi44MjMsMTUuMjM4LTE1LjIzOEMzOTIuMTMsMTQ2LjMzNSwzODUuMzA4LDEzOS41MTIsMzc2Ljg5MiwxMzkuNTEyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzc2Ljg5MiwyMDIuMTgzaC0xODEuNTZjLTguNDE2LDAtMTUuMjM4LDYuODIzLTE1LjIzOCwxNS4yMzhzNi44MjMsMTUuMjM4LDE1LjIzOCwxNS4yMzhoMTgxLjU2DQoJCQljOC40MTYsMCwxNS4yMzgtNi44MjMsMTUuMjM4LTE1LjIzOFMzODUuMzA4LDIwMi4xODMsMzc2Ljg5MiwyMDIuMTgzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMzA3LjAwNCwyNjQuODUySDE5NS4zMzFjLTguNDE2LDAtMTUuMjM4LDYuODIzLTE1LjIzOCwxNS4yMzhjMCw4LjQxNiw2LjgyMywxNS4yMzgsMTUuMjM4LDE1LjIzOGgxMTEuNjcyDQoJCQljOC40MTYsMCwxNS4yMzgtNi44MjMsMTUuMjM4LTE1LjIzOEMzMjIuMjQxLDI3MS42NzUsMzE1LjQyLDI2NC44NTIsMzA3LjAwNCwyNjQuODUyeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
                                        Komentar <span style="font-size:13px;"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> {{-- And Col-8 --}}

            <div class="col-4">
                <div class="card">
                        <img src="{{ asset('asset/images/user-cover.png') }}" class="background-profile" width="100%" height="135px" alt="">
                    <div class="information">
                        <div class="avatar d-flex flex-wrap-none">
                            <img src="{{ asset('asset/images/user-placeholder-m.png') }}" class="foto-profile" alt="">
                            <span><span style="color: white">Nestiawan Ferdiyanto</span> <br><br> @nestiawanfans</span>
                            {{-- <a href="#" style="float: right;">Ubah</a> --}}
                        </div>
                        <br>
                        <div class="d-flex space-bettwen text-center">
                            <div class="list-status-profile">
                                <p>Terverivikasi</p>
                                <p>0</p>
                            </div>
                            <div class="list-status-profile">
                                <p>Diproses</p>
                                <p>0</p>
                            </div>
                            <div class="list-status-profile">
                                <p>Selesai</p>
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>{{-- And Col-4 --}}
        </div>{{-- And d-flex --}}
    </div>    
    <script>
        console.log("hello");
    </script>
@endsection