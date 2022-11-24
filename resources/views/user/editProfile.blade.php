@extends('layouts.layoutRPL_main')

@section('content')
    <form method="POST" action="{{ url('user/'.$model->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="profile edit">
        <div class="card">
            <div class="card-header">
                PROFILE
            </div>
            <div class="card-body">
                <div class="left-side">
                    <img src="{{ asset('./img/profile.png') }}">
                </div>
                <div class="right-side">
                    <div class="flex">
                        <span>Nama: </span><input type="text" name="name" class="edit-textinput-p" value="{{ $model->name }}">
                    </div>
                    <div class="flex">
                        <span>Universitas: </span><input type="text" name="universitas" class="edit-textinput-p" value="{{ $model->universitas }}">
                    </div>
                    <div class="flex">
                        <span>Fakultas:  </span><input type="text" name="fakultas" class="edit-textinput-p" value="{{ $model->fakultas }}">
                    </div>
                    <div class="flex">
                        <span>Jurusan: </span><input type="text" name="jurusan" class="edit-textinput-p" value="{{ $model->jurusan }}">
                    </div>
                    <div class="flex">
                        <span>Email: </span><input type="text" name="email" class="edit-textinput-p" value="{{ $model->email }}">
                    </div>
                    <div class="flex">
                        <span>Whatsapp: </span><input type="text" name="whatsapp" class="edit-textinput-p" value="{{ $model->whatsapp }}">
                    </div>
                    <div class="flex">
                        <span>Instagram: </span><input type="text" name="instagram" class="edit-textinput-p" value="{{ $model->instagram }}">
                    </div>
                    <div class="profile-button">
                        <button class="btn btn-primary text-white button" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection