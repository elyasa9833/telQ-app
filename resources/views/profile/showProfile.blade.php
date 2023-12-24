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

            {{-- Foto Profile Start --}}
            <div class="bg-bgc md:col-span-1 aspect-square h-32 lg:h-48 overflow-auto rounded-full absolute -top-20 self-center lg:-top-7 lg:-left-7 shadow-lg outline outline-1 outline-gray-300/50">
                <img class="h-full w-full object-cover" src="{{ $imgPath }}" alt="">
            </div>
            {{-- Foto Profile END --}}

            <div class="col-span-3 col-start-2 mt-16 lg:mt-9 flex flex-col mx-6 my-7">
                {{-- Isi Profile Start --}}
                <span class="text-slate-800 font-bold text-3xl lg:text-4xl">{{ $user->fullname }}</span>
                <span class="text-slate-500 font-normal text-lg mt-3">{{ $user->deskripsi }}</span>
                <span class="text-warna2 font-semibold text-3xl lg:text-4xl mt-5">{{ $user->phone_number }}</span>
                <div class="flex">
                    <div class="flex mt-5">
                        <span class="text-slate-800 font-semibold text-3xl lg:text-4xl"> {{ $topic_count }} </span>
                        <span class="ml-3 text-warna2 font-semibold text-3xl lg:text-4xl"> Topik </span>
                    </div>
                    <div class="flex my-5 ml-10">
                        <img class="h-10" src="img/Icon/address.svg" alt="">
                        <span class="ml-3 text-slate-800 font-semibold text-3xl my-auto">{{ $user->asal_kota }}</span>
                    </div>
                </div>
                {{-- Isi Profile END --}}

            </div>

            @if (auth()->user()->id == $user->id)
            {{-- Tombol Start --}}
            <div class="flex my-5 mr-7 col-span-6 justify-end">
                {{-- Tombol Edit Start --}}
                <a href="{{ url('/editUser/'. $user->username) }}" class="bg-indigo-600 hover:bg-indigo-700 w-32 h-10 rounded-md justify-end">
                    <span class="text-white font-semibold my-2 text-center block">Edit</span>
                </a>
                {{-- Tombol Edit END --}}
                
            </div>
            {{-- Tombol END --}}
            @endif

        </div>
    </div>



</div>
@endsection
