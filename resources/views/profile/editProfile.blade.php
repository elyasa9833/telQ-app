@extends('layouts.mainProfile')
@section('profileContainer')
<div class="container">
  <div class="isi">
    <div class="foto bg-gray-200">
      <img class="h-full w-full object-cover" src="../../img/profile/{{ $user->photo_profile }}" alt="">
    </div>
    <div class="back">
      <a href="/"><img src="../../Img/Icon/back.svg" alt="kembali"></a>
    </div>

    <form method="post" action="{{ url('/user/update/' .$user->id) }}">
      @csrf
      @method('PUT')
      <div class="nama">
        <input type="text" name="fullname" value="{{ $user->fullname }}" class="text-center">
      </div>
      <div class="status">
        <textarea name="deskripsi" id="" maxlength="150" cols="55" rows="2" class="text-center">{{ $user->deskripsi }}</textarea>
      </div>
      

      <div class="ditail">
        <div class="lokasi">
          <div class="logo"></div>
          <div class="tempat">{{ $user->asal_kota }}</div>
        </div>
        <div class="input">
          <!-- <button type="submit" name="update"><img src="../../Img/Icon/save.svg" alt=""></button> -->
          <button type="submit" class="bg-green-500 px-10 py-1 font-medium text-white mr-4 mb-1 text-xl rounded-md">Save</button>
        </div>
      </div>
    </form>

  </div>

</div>
@endsection