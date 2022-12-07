@extends('layouts.layoutRPL_main')

@section('head')
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-1KFh9HylpQAOGMVc"></script>
@endsection

@section('content')
    <form method="POST" action="{{ url('tugas/'.$model->id) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="container-detailTugas container-edit">
        <div class="row">
            <div class="col left-side">
                @if ( strlen($model->photo) > 0)
                    <img src="{{ asset('photoTugas/'.$model->photo) }}">
                @elseif ( $model->jurusan  == "Pendidikan Masyarakat")
                    <img src="{{ asset('img/jurusan/pendidikanMasyarakat.jpg') }}">
                @elseif ( $model->jurusan  == "Pendidikan Bahasa Indonesia")
                    <img src="{{ asset('img/jurusan/pendidikanBahasaIndonesia.jpg')}}">
                @elseif ( $model->jurusan  == "Pendidikan Bahasa Inggris")
                    <img src="{{ asset('./img/jurusan/pendidikanBahasaInggris.jpg')}}">
                @elseif ( $model->jurusan  == "Pendidikan Matematika")
                    <img src="{{ asset('./img/jurusan/pendidikanMatematika.jpg')}}">
                @elseif ( $model->jurusan  == "Pendidikan Biologi")
                    <img src="{{ asset('./img/jurusan/pendidikanBiologi.jpg')}}">
                @elseif ( $model->jurusan  == "Kesehatan Masyarakat")
                    <img src="{{ asset('./img/jurusan/kesehatanMasyarakat.jpg')}}">
                @elseif ( $model->jurusan  == "Gizi")
                    <img src="{{ asset('./img/jurusan/gizi.jpg')}}">
                @elseif ( $model->jurusan  == "Ilmu Politik")
                    <img src="{{ asset('./img/jurusan/ilmuPolitik.jpg')}}">
                @elseif ( $model->jurusan  == "Agribisnis")
                    <img src="{{ asset('./img/jurusan/agribisnis.jpg')}}">
                @elseif ( $model->jurusan  == "Agroteknologi")
                    <img src="{{ asset('./img/jurusan/agroteknologi.jpg')}}">
                @elseif ( $model->jurusan  == "Ekonomi Pembangunan")
                    <img src="{{ asset('./img/jurusan/ekonomiPembangunan.jpg')}}">
                @elseif ( $model->jurusan  == "Ekonomi Manajemen")
                    <img src="{{ asset('./img/jurusan/ekonomiManajemen.jpg')}}">
                @elseif ( $model->jurusan  == "Ekonomi Akuntansi")
                    <img src="{{ asset('./img/jurusan/ekonomiAkuntansi.jpg')}}">
                @elseif ( $model->jurusan  == "Ekonomi Keuangan Dan Perbankan")
                    <img src="{{ asset('./img/jurusan/ekonomiKeuanganDanPerbankan.jpg')}}">
                @elseif ( $model->jurusan  == "Teknik Sipil")
                    <img src="{{ asset('./img/jurusan/teknikSipil.jpg')}}">
                @elseif ( $model->jurusan  == "Teknik Elektro")
                    <img src="{{ asset('./img/jurusan/teknikElektro.jpg')}}">
                @elseif ( $model->jurusan  == "Informatika")
                    <img src="{{ asset('./img/jurusan/informatika.jpg')}}">
                @else
                    <img src="{{ asset('./img/book1.png')}}">
                @endif
                <div class="container-input">
                    <input type="file" name="photo" class="edit-textinput-desc">
                </div>
            </div>
            <div class="col right-side">
                <div class="q">
                    <input type="text" name="kategori" class="edit-textinput-h1" value="{{ $model->kategori }}">
                    <h4>{{ $model->owner }}</h4>
                    <h5>{{ $model->fakultas }}</h5>
                    <h5>{{ $model->jurusan }}</h5>
                </div>
                <div class="w">
                    <input type="text" name="deskripsi" class="edit-textinput-desc" value="{{ $model->deskripsi }}">
                </div>
                <div class="e">
                    <div>
                        <span class="harga">Bayaran: </span><input type="text" name="harga" class="edit-textinput-p" value="{{ $model->harga }}">
                    </div>
                    <div>
                        <span class="harga">Deadline: </span><input type="text" name="deadline" class="edit-textinput-dl small-top-margin" value="{{ $model->deadline }}">
                    </div>
                </div>
                <div class="user-on">
                    <button class="btn" type="submit">Save</button>
                </div>
                </form>
                <script type="text/javascript">
                    // For example trigger on button clicked, or any time you need
                    var payButton = document.getElementById('pay-button');
                    payButton.addEventListener('click', function () {
                        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                        window.snap.pay('66e4fa55-fdac-4ef9-91b5-733b97d1b862');
                        // customer will be redirected after completing payment pop-up
                    });
                </script>
            </div>
        </div>
    </div>
@endsection