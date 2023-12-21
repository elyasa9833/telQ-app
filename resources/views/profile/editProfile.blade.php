@extends('layouts.main')
@section('container')
<div class="h-[88vh] md:h-[93vh] bg-white pb-20 md:pb-5 overflow-y-hidden overflow-x-hidden mx-4 rounded pt-2 shadow">
    <div class="w-full bg-white pt-4 pb-2 rounded-t">
        <div class="flex mb-4">
            <img class="ml-7 h-5 md:h-7" src="img/Icon/profile[H].svg" alt="">
            <span class="ml-3 text-warna3 font-bold text-sm md:text-xl">Profile</span>
        </div>
        <hr>
    </div>

    <div class="bg-white h-full overflow-y-auto flex flex-col">
        <div class="flex flex-col md:grid grid-cols-5 relative w-4/5 h-fit my-20 shadow-lg rounded-md outline outline-1 outline-gray-300/50 m-auto">

            @php $UserImgPath = ($user->photo_profile) ? asset('storage/'. $user->photo_profile) : "../img/profile/User.svg" @endphp
            {{-- Foto Profile Start --}}
            <div class="bg-bgc md:col-span-1 aspect-square h-32 lg:h-48 overflow-auto rounded-full absolute -top-20 self-center lg:-top-7 lg:-left-7 shadow-lg outline outline-1 outline-gray-300/50">
                <img class="h-full w-full object-cover" src="{{ $UserImgPath }}" alt="">
            </div>
            {{-- Foto Profile END --}}

            {{-- Form Start --}}
            <div class="col-span-3 col-start-2 mt-16 lg:mt-9 flex flex-col my-7">
                <form action="{{ url('/user/'. $user->id) }}" method="post" enctype="multipart/form-data" class="w-[90%] mx-auto" >
                    @csrf
                    @method('put')
                    
                    {{-- Isi Profile Start --}}
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                        <input type="text" name="fullname" id="name" value="{{ $user->fullname }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" required>
                    </div>
                    <div class="mb-5">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">{{ $user->deskripsi }}</textarea>
                    </div>
                    <div class="mb-5">
                        <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Telepon</label>
                        <input type="text" name="phone_number" id="phoneNumber" value="{{ $user->phone_number }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" required>
                    </div>
                    <div class="mb-5">
                        <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah Postingan</label>
                        <input type="text" id="topic" value="{{ $topic_count }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" disabled>
                    </div>
                    <div class="mb-5">
                        <label for="asal_kota" class="block mb-2 text-sm font-medium text-gray-900 ">Asal Kota</label>
                        <input type="text" name="asal_kota" id="asal_kota" value="{{ $user->asal_kota }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5" required>
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload Foto Profil</label>
                        <input aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                    </div>
                    {{-- Isi Profile END --}}

                    {{-- Tombol Start --}}
                    <div class="flex my-5 col-span-6 mr-[-0.5rem] justify-end">
                        <a href="{{ url('/user/'. $user->username) }}" class="bg-red-600 hover:bg-red-700 w-32 h-10 mx-2 rounded-md justify-end">
                            <span class="text-white font-semibold my-2 text-center block">Cancel</span>
                        </a>

                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 mx-2 w-32 h-10 rounded-md justify-end">
                            <span class="text-white font-semibold">Simpan</span>
                        </button>
                    </div>
                    {{-- Tombol END --}}
                </form>
                {{-- Form END --}}

            </div>
        </div>
    </div>

</div>
@endsection
