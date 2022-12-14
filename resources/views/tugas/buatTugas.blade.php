@extends('layouts.layoutRPL_main')

@section('content')
    <div class="buatTugas signup">
        <h1>Buat Tugas</h1>
            <form action="{{ url('tugas') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <h3>Kategori Tugas</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="kategori" class="form-control" placeholder="Write Your Kategori Tugas ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Deskripsi</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="deskripsi" class="form-control" placeholder="Write Your Deskripsi ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Deadline</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="deadline" class="form-control" placeholder="Write Your Deadline ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Bayaran</h3>
                    </div>
                    <div class="col">
                        <input type="text" name="harga" class="form-control" placeholder="Write Your Harga ...">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <h3>Photo Tugas</h3>
                    </div>
                    <div class="col">
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
@endsection