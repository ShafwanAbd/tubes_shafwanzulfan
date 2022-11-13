@extends('layouts.layoutRPL_main')

@section('head')
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-1KFh9HylpQAOGMVc"></script>
@endsection

@section('content')
    <div class="container-detailTugas">
        <div class="row">
            <div class="col left-side">
                <img src="{{ asset('img/img1.png') }}">
            </div>
            <div class="col right-side">
                <div class="q">
                    <h1>{{ $model->kategori }}</h1>
                    <h4>Nama Owner</h4>
                    <h4>{{ $model->jurusan }}</h4>
                </div>
                <div class="w">
                    <p>{{ $model->deskripsi }}</p>
                </div>
                <div class="e">
                    <p class="harga">Harga: {{ $model->harga }}</p>
                </div>
                <div class="r">
                    <button class="btn" href="{{ url('tugas/order') }}" type="submit" id="pay-button">Pesan</button>
                </div>
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