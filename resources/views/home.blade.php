@extends('layouts.layoutRPL_main')

@section('content')
<br>
<div class="container homeApp">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br><br>
            <div class="card">
                <div class="card-header color-primary text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                    <br><br>
                    <a class="btn color-primary text-white" href="{{ url('home_main') }}">Home Main</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
