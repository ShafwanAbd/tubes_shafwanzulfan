@extends('layouts.layoutRPL_main')

@section('content')
    <div class="home_main">
        @if(Session::has('success'))
        <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/imgslide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/imgslide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/imgslide3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h1>Tak Takut Tugas Walau Sibuk</h1>
            
        <h2 class="title-jurusan">Fakultas Tugas</h2>
        <div class="jurusanTugas">
            <div class="row">
                <a class="item" href="{{ url('tugas?keywordFakultas=Keguruan dan Ilmu Pendidikan') }}">
                        <div class="q">
                            <img src="./img/fakultas/fkip.jpg">
                        </div>
                        <h4>Keguruan dan Ilmu Pendidikan</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Ilmu Kesehatan') }}">
                        <div class="q">
                            <img src="./img/fakultas/kesehatan.jpg">
                        </div>
                        <h4>Ilmu Kesehatan</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Ilmu Sosial dan Ilmu Politik') }}">
                        <div class="q">
                            <img src="./img/fakultas/ilpol.jpg">
                        </div>
                        <h4>Ilmu Sosial dan Ilmu Politik</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Pertanian') }}">
                        <div class="q">
                            <img src="./img/fakultas/pertanian.jpg">
                        </div>
                        <h4>Pertanian</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Ekonomi') }}">
                        <div class="q">
                            <img src="./img/fakultas/ekonomi.jpg">
                        </div>
                        <h4>Ekonomi</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordFakultas=Teknik') }}">
                        <div class="q">
                            <img src="./img/fakultas/teknik.jpg">
                        </div>
                        <h4>Teknik</h4>
                </a>
            </div>
        </div>

        <h2 class="title-jurusan">Jurusan Tugas</h2>
        <div class="jurusanTugas">
            <div class="row">
                <a class="item" href="{{ url('tugas?keywordJurusan=pendidikan Masyarakat') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanMasyarakat.jpg">
                        </div>
                        <h4>Pendidikan Masyarakat</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=pendidikan Bahasa Indonesia') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanBahasaIndonesia.jpg">
                        </div>
                        <h4>Pendidikan Bahasa Indonesia</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=pendidikan Bahasa Inggris') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanBahasaInggris.jpg">
                        </div>
                        <h4>Pendidikan Bahasa Inggris</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=pendidikan Matematika') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanMatematika.jpg">
                        </div>
                        <h4>Pendidikan Matematika</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=pendidikan Biologi') }}">
                        <div class="q">
                            <img src="./img/jurusan/pendidikanBiologi.jpg">
                        </div>
                        <h4>Pendidikan Biologi</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=kesehatan Masyarakat') }}">
                        <div class="q">
                            <img src="./img/jurusan/kesehatanMasyarakat.jpg">
                        </div>
                        <h4>Kesehatan Masyarakat</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=gizi') }}">
                        <div class="q">
                            <img src="./img/jurusan/gizi.jpg">
                        </div>
                        <h4>Gizi</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=ilmu Politik') }}">
                        <div class="q">
                            <img src="./img/jurusan/ilmuPolitik.jpg">
                        </div>
                        <h4>Ilmu Politik</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=agribisnis') }}">
                        <div class="q">
                            <img src="./img/jurusan/agribisnis.jpg">
                        </div>
                        <h4>Agribisnis</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=agroteknologi') }}">
                        <div class="q">
                            <img src="./img/jurusan/agroteknologi.jpg">
                        </div>
                        <h4>Agroteknologi</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=ekonomi Pembangunan') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiPembangunan.jpg">
                        </div>
                        <h4>Ekonomi Pembangunan</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=ekonomi Manajemen') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiManajemen.jpg">
                        </div>
                        <h4>Ekonomi Manajemen</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=ekonomi Akuntansi') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiAkuntansi.jpg">
                        </div>
                        <h4>EkonomiAkuntansi</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=ekonomi Keuangan Dan Perbankan') }}">
                        <div class="q">
                            <img src="./img/jurusan/ekonomiKeuanganDanPerbankan.jpg">
                        </div>
                        <h4>Ekonomi Keuangan dan Perbankan (D3)</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=teknik Sipil') }}">
                        <div class="q">
                            <img src="./img/jurusan/teknikSipil.jpg">
                        </div>
                        <h4>Teknik Sipil</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=teknik Elektro') }}">
                        <div class="q">
                            <img src="./img/jurusan/teknikElektro.jpg">
                        </div>
                        <h4>Teknik Elektro</h4>
                </a>
                <a class="item" href="{{ url('tugas?keywordJurusan=informatika') }}">
                        <div class="q">
                            <img src="./img/jurusan/informatika.jpg">
                        </div>
                        <h4>Informatika</h4>
                </a>
            </div>
        </div>

    </div>
    
<footer>
    <div class="isi">
        <a href="https://www.freepik.com/free-vector/qa-engineers-concept-illustration_7119020.htm#query=technic&position=0&from_view=author">Image by storyset</a> on Freepik
        <p>Created by Muhammad Shafwan Abdullah & Zulfan Syahidan Alfarra</p>
    </div>
</footer>
    
@endsection