@extends('layouts.layoutRPL_main')

@section('head')
@endsection

@section('content')
    <div class="container-kirimTugas">
        <h2>Kirim Tugas</h2>
        <form action="{{ url('kirimTugas/'.$datas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="kirimTugas-isi">
            
            <div class="pertanyaan">
                <span>Pesan</span>
                <input type="text" name="pesan" placeholder="Isi Pesan Pada Tugas ...">
            </div>

            <div class="pertanyaan">
                <span>Tugas</span>
                <input type="file" name="fileTugas" placeholder="Isi Untuk Tugas ...">
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