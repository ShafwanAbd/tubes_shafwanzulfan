@extends('layouts.layoutRPL_main')

@section('head')
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-1KFh9HylpQAOGMVc"></script>
@endsection

@section('content')
    <div class="container-lihatTugas profile">
        <div class="card">
            <div class="card-header">
                Lihat Tugas
            </div>
            <div class="card-body">
                <div class="lihatTugas-isi">
                    <p>Judul:       {{ $kirimTugas->judul }}</p>
                    <p>Email:       {{ $kirimTugas->email }}</p>
                    <p>Name:        {{ $kirimTugas->name }}</p>
                    <p>Pesan:       {{ $kirimTugas->pesan }}</p>
                    <p>Link Tugas:  <a href="{{ $kirimTugas->linkTugas }}">{{ $kirimTugas->linkTugas }}</a></p>
                </div>
                <div class="lihatTugas-button">
                    <button class="btn btn-primary" id="pay-button">
                        Bayar
                    </button>
                    <script type="text/javascript">
                        // For example trigger on button clicked, or any time you need
                        var payButton = document.getElementById('pay-button');
                        payButton.addEventListener('click', function () {
                            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                            window.snap.pay('{{$snapToken}}', {
                            onSuccess: function(result){
                                /* You may add your own implementation here */
                                alert("payment success!"); console.log(result);
                            },
                            onPending: function(result){
                                /* You may add your own implementation here */
                                alert("wating your payment!"); console.log(result);
                            },
                            onError: function(result){
                                /* You may add your own implementation here */
                                alert("payment failed!"); console.log(result);
                            },
                            onClose: function(){
                                /* You may add your own implementation here */
                                alert('you closed the popup without finishing the payment');
                            }
                            })
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection