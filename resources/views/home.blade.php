@extends('layouts.app')

@section('content')
<div class="container homeApp">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
            <div class="card">
                <div class="card-header color-primary">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                    <br><br>
                    <a class="btn color-primary" href="{{ url('home_main') }}">Home Main</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
