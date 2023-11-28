@extends('layouts.main')
@section('container')

<div class="kontener text-black">
    <div class="main">
        <div class="title">
            <img src="img/Icon/danger.svg" alt="">
            <h1>Laporan Komentar</h1>
        </div>

        <div class="isi">
            <div class="komen">
                <div class="atas">
                    <!-- si foto profile -->
                    <div class="w-44 my-1 mx-1">
                        <div class="flex" href="#">
                            <div class="bg-blue-700 aspect-square h-10 overflow-hidden rounded-full">
                                <img src="img/profile/IMG-20220710-WA0006.jpg" alt="">
                            </div>
                            <span class="text-xs md:text-sm my-auto ml-2 text-gray-900 font-bold">Nama
                                Profile</span>
                        </div>
                    </div>

                    <!-- menu -->
                    <div id="menu" class="absolute right-0 top-0 mt-1 mr-3">
                        <!-- Titik tiga [menu], Start -->
                        <button id="dropdownMenuIconHorizontalButton"
                            data-dropdown-toggle="dropdownDotsHorizontal"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-700 bg-white rounded-lg hover:bg-gray-100 focus"
                            type="button">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown menu, Start-->
                        <div id="dropdownDotsHorizontal"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow drop-shadow w-[13rem] overflow-hidden">
                            <p class="flex px-4 py-2"> <img class="h-5" src="img/icon/danger2.svg"
                                    alt="">
                                <span class="ml-2 font-medium"> Tindakan Lanjutan </span>
                            </p>
                            <hr>
                            <div data-modal-target="popup-hapus" data-modal-toggle="popup-hapus"
                                class="flex px-3 py-2 text-sm text-[#FF1A1A] hover:bg-gray-100 cursor-pointer"
                                type="button"> <span class="ml-2 my-auto">Hapus Jawaban</span>
                            </div>
                        </div>
                        <!-- Dropdown menu, End-->
                        <!-- Titik tiga [menu], End -->

                        <!-- POP UP HAPUS JAWABAN / PERTANYAAN, START -->
                        <div id="popup-hapus" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-800 w-14 h-14"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-medium text-gray-800">Apakah kamu yakin
                                            ingin
                                            Menghapus?</h3>
                                        <button data-modal-hide="popup-hapus" type="button"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Iya
                                        </button>
                                        <button data-modal-hide="popup-hapus" type="button"
                                            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POP UP HAPUS JAWABAN / PERTANYAAN, END -->
                    </div>
                </div>

                <div class="bawah">
                    <h3>
                        Ini adalah jawaban yang dilaporkan karna dia bilang b***
                    </h3>
                    <a href="" class="text-blue-600">
                        (lebih lanjut)
                    </a>
                    <p class="absolute right-1 bottom-0 text-sm text-gray-500">
                        13 : 52 /05 - 04 - 2023
                    </p>
                </div>
                <div class="detail">
                    <h2>Tipe Laporan : <span>Ujaran Kebencian</span></h2>
                    <h2>Pelaporan : <span>astu maulana</span></h2>
                    <h2>Gambar : <span>-</span></h2>
                </div>
            </div>
        </div>
        <div class="isi">
            <div class="komen">
                <div class="atas">
                    <!-- si foto profile -->
                    <div class="w-44 my-1 mx-1">
                        <div class="flex" href="#">
                            <div class="bg-blue-700 aspect-square h-10 overflow-hidden rounded-full">
                                <img src="img/profile/IMG-20220710-WA0006.jpg" alt="">
                            </div>
                            <span class="text-xs md:text-sm my-auto ml-2 text-gray-900 font-bold">Nama
                                Profile</span>
                        </div>
                    </div>

                    <!-- menu -->
                    <div id="menu" class="absolute right-0 top-0 mt-1 mr-3">
                        <!-- Titik tiga [menu], Start -->
                        <button id="dropdownMenuIconHorizontalButton"
                            data-dropdown-toggle="dropdownDotsHorizontal"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-700 bg-white rounded-lg hover:bg-gray-100 focus"
                            type="button">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown menu, Start-->
                        <div id="dropdownDotsHorizontal"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow drop-shadow w-[13rem] overflow-hidden">
                            <p class="flex px-4 py-2"> <img class="h-5" src="img/icon/danger2.svg"
                                    alt="">
                                <span class="ml-2 font-medium"> Tindakan Lanjutan </span>
                            </p>
                            <hr>
                            <div data-modal-target="popup-hapus" data-modal-toggle="popup-hapus"
                                class="flex px-3 py-2 text-sm text-[#FF1A1A] hover:bg-gray-100 cursor-pointer"
                                type="button"> <span class="ml-2 my-auto">Hapus Jawaban</span>
                            </div>
                        </div>
                        <!-- Dropdown menu, End-->
                        <!-- Titik tiga [menu], End -->

                        <!-- POP UP HAPUS JAWABAN / PERTANYAAN, START -->
                        <div id="popup-hapus" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-800 w-14 h-14"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-medium text-gray-800">Apakah kamu yakin
                                            ingin
                                            Menghapus?</h3>
                                        <button data-modal-hide="popup-hapus" type="button"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Iya
                                        </button>
                                        <button data-modal-hide="popup-hapus" type="button"
                                            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POP UP HAPUS JAWABAN / PERTANYAAN, END -->
                    </div>
                </div>

                <div class="bawah">
                    <h3>
                        Ini adalah jawaban yang dilaporkan karna dia bilang b***
                    </h3>
                    <a href="" class="text-blue-600">
                        (lebih lanjut)
                    </a>
                    <p class="absolute right-1 bottom-0 text-sm text-gray-500">
                        13 : 52 /05 - 04 - 2023
                    </p>
                </div>
                <div class="detail">
                    <h2>Tipe Laporan : <span>Ujaran Kebencian</span></h2>
                    <h2>Pelaporan : <span>astu maulana</span></h2>
                    <h2>Gambar : <span><img src="img/jongunc.jpg" alt=""></span></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/modjava.js"></script>
@endsection