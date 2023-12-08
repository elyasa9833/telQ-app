@extends('layouts.mainProfile')
@section('profileContainer')
    <div class="container">
        <div class="isi">
            <div class="foto bg-gray-200">
                <img class="h-full w-full object-cover" src="../img/profile/{{ $user->photo_profile }}" alt="">
            </div>

            {{-- if($user == $id_user) --}}
            <div class="edit">
                <a href="/user/{{ $user->username }}/edit"><img src="../../Img/Icon/pensil.svg" alt=""></a>
            </div>

            <div class="back">
                <a href="/"><img src="../Img/Icon/back.svg" alt="kembali"></a>
            </div>

            <div class="nama">{{ $user->fullname }}</div>
            <div class="status">{{ $user->deskripsi }}</div>
            
            <div class="ditail">
                <div class="lokasi">
                    <div class="logo"></div>
                    <div class="tempat">{{ $user->asal_kota }}</div>
                </div>
            </div>

        </div>

    </div>
@endsection