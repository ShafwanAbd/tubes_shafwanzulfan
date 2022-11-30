@extends('layouts.layoutRPL_main')

@section('head')
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-1KFh9HylpQAOGMVc"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <p>Tugas:  <a href="{{ url('fileTugas/'.$kirimTugas->fileTugas) }}">{{ $kirimTugas->fileTugas }}</a></p>
                </div>
                <div class="lihatTugas-button">
                    <button class="btn btn-primary" id="pay-button">
                        Bayar
                    </button>

                    <form action="{{ url('kirimTugas_order/'.$id) }}" method="POST" id="submit_form">
                        @csrf
                        <input type="hidden" name="json" id="json_callback">
                    </form>

                    <script type="text/javascript">
                        // For example trigger on button clicked, or any time you need
                        var payButton = document.getElementById('pay-button');
                        payButton.addEventListener('click', function () {
                            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                            window.snap.pay('{{$snapToken}}', {
                            onSuccess: function(result){
                                /* You may add your own implementation here */
                                console.log(result);
                                send_response_to_form(result);
                            },
                            onPending: function(result){
                                /* You may add your own implementation here */
                                console.log(result);
                                send_response_to_form(result);
                            },
                            onError: function(result){
                                /* You may add your own implementation here */
                                console.log(result);
                                send_response_to_form(result);
                            },
                            onClose: function(){
                                /* You may add your own implementation here */
                                alert('you closed the popup without finishing the payment');
                            }
                            })

                            function send_response_to_form(result){
                                document.getElementById('json_callback').value = JSON.stringify(result);
                                $('#submit_form').submit();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection