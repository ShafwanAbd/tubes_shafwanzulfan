@extends('layouts.layoutRPL_main')

@section('content')
    <div class="profile">
        @if(Session::has('success'))
            <p class="alert alert-success" id="sixSeconds">{{ Session::get('success') }}</p>
        @endif
        <div class="card">
            <div class="card-header">
                PROFILE
            </div>
            <div class="card-body">
                <div class="left-side">
                    <img src="{{ asset('./img/profile.png') }}">
                </div>
                <div class="right-side">
                    <p>Nama:        {{ $model->name }}</p>
                    <p>Universitas: {{ $model->universitas }}</p>
                    <p>Fakultas:    {{ $model->fakultas }}</p>
                    <p>Jurusan:     {{ $model->jurusan }}</p>
                    <p>Email:       {{ $model->email }}</p>
                    @if($model->whatsapp)
                        <p>Whatsapp : {{ $model->whatsapp }}</p>
                    @else
                        <p>Whatsapp : - </p>
                    @endif
                    @if($model->instagram)
                        <p>Instagram: {{ $model->instagram }}</p>
                    @else
                        <p>Instagram: - </p>
                    @endif
                    <div class="profile-button">
                        <a class="btn btn-primary text-white button" href="{{ url('tugas?keywordOwner='.$model->name) }}">Tugas Saya</a>
                        <a class="btn btn-primary text-white button" href="{{ url('user/'.$model->id.'/edit') }}">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection