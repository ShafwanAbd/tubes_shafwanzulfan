<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('js/javascript.js') }}"></script>   
    <title>Toko Tugas</title>
</head>

<nav class="navbar navbar-expand-lg" id="navbarRPL">
    <div class="container-fluid">
        <a class="navbar-brand hover-shadow" href="{{ url('home') }}">Toko Tugas</a>
    </div>

    <div class="collapse navbar-collapse" id="navbarMenuRPL">
        <div class="navbar-nav">
            <a class="nav-link active hover-shadow" href="{{ url('home_main') }}">Home</a>
            <a class="nav-link hover-shadow dropdown" href="{{ url('tugas') }}">Tugas</a>
            <a class="nav-link hover-shadow" href="{{ url('user/'.Auth::id()) }}">Profile</a>
            <a class="hover-shadow" href="{{ url('login') }}"><img src="{{ asset('img/login_icon.png') }}"></a>
        </div>
    </div>
</nav>

<body>
    <div class="containerRPL">
        <div class="cariTugas">
            <div class="row">
                <div class="col q">
                    <div class="left-side">
                        <h2 class="item hover-shadow">Nama Pembuat</h2>
                        <form method="GET" action="{{ url('tugas') }}">
                            <input type="text" name="keywordNama" class="textinput" value="{{ $keywordNama }}">
                            <button type="submit" class="buttoninput"><img src="{{ asset('./img/search_icon.png') }}"></button>
                        </form>
                        <h2 class="item hover-shadow">Fakultas</h2>
                        <form method="GET" action="{{ url('tugas') }}">
                            <input type="text" name="keywordFakultas" class="textinput" value="{{ $keywordFakultas }}">
                            <button type="submit" class="buttoninput"><img src="{{ asset('./img/search_icon.png') }}"></button>
                        </form>
                        <h2 class="item hover-shadow">Jurusan</h2>
                        <form method="GET" action="{{ url('tugas') }}">
                            <input type="text" name="keywordJurusan" class="textinput" value="{{ $keywordJurusan }}">
                            <button type="submit" class="buttoninput"><img src="{{ asset('./img/search_icon.png') }}"></button>
                        </form>
                        <h2 class="item hover-shadow">Kategori</h2>
                        <form method="GET" action="{{ url('tugas') }}">
                            <input type="text" name="keywordKategori" class="textinput" value="{{ $keywordKategori }}">
                            <button type="submit" class="buttoninput"><img src="{{ asset('./img/search_icon.png') }}"></button>
                        </form>
                        <a class="btn" href="{{ url('tugas/create') }}">Buat Tugas</a>
                    </div>
                </div>
                <div class="col w">
                    <div class="right-side">
                    <h1 class="judul">Cari Tugas</h1>
                    @if(Session::has('success'))
                    <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
                    @endif
                    
                    @foreach($datas as $key=>$value)
                    <a class="clickItem" href="{{ url('tugas/'.$value->id) }}">
                        <div class="item hover-zoom">
                            @if ( $value->jurusan  == "Pendidikan Masyarakat")
                                <img src="./img/jurusan/pendidikanMasyarakat.jpg">
                            @elseif ( $value->jurusan  == "Pendidikan Bahasa Indonesia")
                                <img src="./img/jurusan/pendidikanBahasaIndonesia.jpg">
                            @elseif ( $value->jurusan  == "Pendidikan Bahasa Inggris")
                                <img src="./img/jurusan/pendidikanBahasaInggris.jpg">
                            @elseif ( $value->jurusan  == "Pendidikan Matematika")
                                <img src="./img/jurusan/pendidikanMatematika.jpg">
                            @elseif ( $value->jurusan  == "Pendidikan Biologi")
                                <img src="./img/jurusan/pendidikanBiologi.jpg">
                            @elseif ( $value->jurusan  == "Kesehatan Masyarakat")
                                <img src="./img/jurusan/kesehatanMasyarakat.jpg">
                            @elseif ( $value->jurusan  == "Gizi")
                                <img src="./img/jurusan/gizi.jpg">
                            @elseif ( $value->jurusan  == "Ilmu Politik")
                                <img src="./img/jurusan/ilmuPolitik.jpg">
                            @elseif ( $value->jurusan  == "Agribisnis")
                                <img src="./img/jurusan/agribisnis.jpg">
                            @elseif ( $value->jurusan  == "Agroteknologi")
                                <img src="./img/jurusan/agroteknologi.jpg">
                            @elseif ( $value->jurusan  == "Ekonomi Pembangunan")
                                <img src="./img/jurusan/ekonomiPembangunan.jpg">
                            @elseif ( $value->jurusan  == "Ekonomi Manajemen")
                                <img src="./img/jurusan/ekonomiManajemen.jpg">
                            @elseif ( $value->jurusan  == "Ekonomi Akuntansi")
                                <img src="./img/jurusan/ekonomiAkuntansi.jpg">
                            @elseif ( $value->jurusan  == "Ekonomi Keuangan Dan Perbankan")
                                <img src="./img/jurusan/ekonomiKeuanganDanPerbankan.jpg">
                            @elseif ( $value->jurusan  == "Teknik Sipil")
                                <img src="./img/jurusan/teknikSipil.jpg">
                            @elseif ( $value->jurusan  == "Teknik Elektro")
                                <img src="./img/jurusan/teknikElektro.jpg">
                            @elseif ( $value->jurusan  == "Informatika")
                                <img src="./img/jurusan/informatika.jpg">
                            @else
                                <img src="./img/img1.png">
                            @endif
                            <div class="isi">
                                <div class="item-judul">
                                    <h2>{{ $value->jurusan }}</h2>
                                    <h3 class="right">{{ $value->kategori }}</h3>
                                </div>
                                <div class="item-isi">
                                    <p>{{ $value->deskripsi }}</p>
                                    <div class="item-info">
                                        <h4>Deadline: {{ $value->deadline }}</h4>
                                        <h4 class="right">Harga: {{ $value->harga }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    <div class="margin-5"></div>
                    {{ $datas->links() }}
                    <div class="margin-10"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>