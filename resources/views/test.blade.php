@extends('layouts.main')
@section('container')
<div class="h-[88vh] md:h-[93vh] pb-20 md:pb-5 overflow-y-hidden overflow-x-hidden mx-4 rounded pt-2 shadow">
    <div class="w-full bg-white pt-4 pb-2 rounded-t">
        <div class="flex mb-4">
            <img class="ml-7 h-5 md:h-7" src="img/Icon/profile[H].svg" alt="">
            <span class="ml-3 text-warna3 font-bold text-sm md:text-xl">Profile</span>
        </div>
        <hr>
    </div>



    <div class="bg-white h-full overflow-y-hidden flex">
        <div class="flex flex-col md:grid grid-cols-5 relative w-4/5 h-full my-20 shadow-lg rounded-md outline outline-1 outline-gray-300/50 m-auto">

            {{-- Foto Profile Start --}}
            <div class="bg-bgc md:col-span-1 aspect-square h-32 lg:h-48 overflow-auto rounded-full absolute -top-20 self-center lg:-top-7 lg:-left-7 shadow-lg outline outline-1 outline-gray-300/50">
                <a href="#">
                <img class="h-full w-full object-cover" src="img/WhatsApp Image 2023-05-23 at 21.59.18.jpg" alt="">
                </a>
            </div>
            {{-- Foto Profile END --}}

            {{-- Isi Profile Start --}}
            <div class="col-span-3 col-start-2 mt-16 lg:mt-9 flex flex-col mx-6">
                <span class="text-slate-800 font-bold text-3xl lg:text-4xl">Adrian</span>
                <span class="text-slate-500 font-normal text-lg mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                <span class="text-warna2 font-semibold text-3xl lg:text-4xl mt-5">0812 - 3456 - 7890</span>
                <div class="flex">
                    <div class="flex mt-5">
                        <span class="text-slate-800 font-semibold text-3xl lg:text-4xl"> 1 </span>
                        <span class="ml-3 text-warna2 font-semibold text-3xl lg:text-4xl"> Topik </span>
                    </div>
                    <div class="flex my-5 ml-10">
                        <img class="h-10" src="img/Icon/address.svg" alt="">
                        <span class="ml-3 text-slate-800 font-semibold text-3xl my-auto">Alamat</span>
                    </div>
                </div>
            </div>
            {{-- Isi Profile END --}}

            <div class="flex col-span-3 col-start-3 lg:col-span-2 lg:col-start-4 mr-2">
                {{-- Tombol Edit Start --}}
                <button class="bg-bgc ml-4 w-32 h-10 rounded-md justify-end">
                    <span class="text-slate-800 font-semibold">Edit</span>
                </button>
                {{-- Tombol Edit END --}}
                {{-- Tombol Cancel Start --}}
                <button class="bg-red-400 ml-4 w-32 h-10 rounded-md justify-end">
                    <span class="text-white font-semibold">Cancel</span>
                </button>
                {{-- Tombol Cancel END --}}
                {{-- Tombol Simpan Start --}}
                <button class="bg-warna2 ml-4 w-32 h-10 rounded-md justify-end">
                    <span class="text-white font-semibold">Simpan</span>
                </button>
                {{-- Tombol Simpan END --}}
            </div>

        </div>
    </div>



</div>
@endsection
