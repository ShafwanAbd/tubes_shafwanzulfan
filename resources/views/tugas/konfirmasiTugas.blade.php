@extends('layouts.layoutRPL_main')

@section('head')
@endsection

@section('content')
    <div class="container-konfirmasiTugas">
        <h2>Daftar Penjoki</h2>
        @if(Session::has('success'))
            <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Email</th>
                    <th scope="col">Konfirmasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $key=>$value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->universitas }}</td>
                    <td>{{ $value->email }}</td>
                    <td class="buttonKonfirmasi">
                        @if($value->konfirmasi == 1)
                        <form method="POST" action="{{ url('konfirmasi/'.$value->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <button class="btn btn-accept" type="submit">
                                <img src="{{ asset('img/accept.png') }}">
                            </button>
                        </form>
                        <form method="POST" action="{{ url('konfirmasi/'.$value->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-decline" type="submit">
                                <img src="{{ asset('img/decline.png') }}">
                            </button>
                        </form>
                        @elseif($value->konfirmasi == 2)
                            <a class="btn btn-accept disabled">
                                Menunggu Tugas
                            </a>
                        @elseif($value->konfirmasi == 3)
                            <a class="btn btn-accept final-btn" href="{{ url('kirimTugas/'.$value->id) }}">
                                Lihat Tugas
                            </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection