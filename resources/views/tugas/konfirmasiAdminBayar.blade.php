@extends('layouts.layoutRPL_main')

@section('head')
@endsection

@section('content')
    <div class="container-konfirmasiTugas konfirmasiAdmin">
        <div class="dropdown">
            <h2 class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Pembayaran Joki</h2>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('konfirmasi') }}">Daftar Transaksi</a></li>
            </ul>
        </div>
        @if(Session::has('success'))
            <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <div class="hidden">
                    {{ $i = 0 }}
                </div>
                @foreach($datas as $key=>$value)
                <div class="hidden">
                    {{ $i++ }}
                </div>
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td><a class="clean" href="#">{{ $value->name }}</a></td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->universitas }}</td>
                    <td>{{ DB::table('Tugas')->where('id', $value->idTugas)->value('harga') }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td class="buttonKonfirmasi">
                        <a class="btn btn-9 first" href="{{ url('hapus_done/'.$value->id) }}">
                            Bayar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection