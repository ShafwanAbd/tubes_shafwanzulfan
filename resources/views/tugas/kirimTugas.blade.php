@extends('layouts.layoutRPL_main')

@section('head')
@endsection

@section('content')
    <div class="container-kirimTugas">
        <h2>Kirim Tugas</h2>
        <form action="{{ url('kirimTugas/'.$datas->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="kirimTugas-isi">
            <div class="pertanyaan">
                <span>Judul</span>
                <input type="text" name="judul" placeholder="Isi Judul Tugas ..." autofocus>
            </div>

            <div class="pertanyaan">
                <span>Pesan</span>
                <input type="text" name="pesan" placeholder="Isi Pesan Pada Tugas ..." autofocus>
            </div>

            <div class="pertanyaan">
                <span>Link Tugas</span>
                <input type="text" name="linkTugas" placeholder="Isi Link Untuk Tugas ..." autofocus>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">
                    Kirim
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection