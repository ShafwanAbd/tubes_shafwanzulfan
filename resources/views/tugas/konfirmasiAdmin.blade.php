@extends('layouts.layoutRPL_main')

@section('head')
@endsection

@section('content')
    <div class="container-konfirmasiTugas konfirmasiAdmin">
        <h2>Daftar Transaksi</h2>
        @if(Session::has('success'))
            <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Payment Type</th>
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
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->order_id }}</td>
                    <td>{{ $value->gross_amount }}</td>
                    <td>{{ $value->payment_type }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td class="buttonKonfirmasi">
                        <a class="btn btn-9 first" href="{{ $value->pdf_url }}">
                            Lihat Invoice
                        </a>
                        <a class="btn btn-9 hapus" href="{{ url('hapus_order/'.$value->id) }}">
                            Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection