@extends('layouts.main')

@section('container')
<!-- Ini apasih namanya, pokoknya dalemnya ada topik ama postingan. Start -->
<div class="overflow-auto h-[88vh] md:h-[93vh]">

    @foreach ($answers as $num => $answer)
    <div class="mb-5">

        <!-- Start Posting -->
        <div class="bg-white mt-1 md:mt-2 mx-5 relative rounded sm:w-4/6 sm:mx-auto pb-6">

            <!-- Nama profile -->
            <div class="w-44 ml-2 pt-3">
                <div class="flex">
                <a href="#" class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="img/{{ $answer->user->photo_profile }}" alt="profile">
                </a>
                <a href="{{ url('/user/' .$answer->user->username) }}" class="text-xs md:text-sm my-auto ml-2 text-gray-900 font-bold">{{ $answer->user->fullname }}</a>

                </div>
            </div>

            <!-- menu -->
            <div id="menu" class="absolute right-0 top-0 mt-3 mr-3">
                <!-- Titik tiga [menu], Start -->
                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{ $num }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-700 bg-white rounded-lg hover:bg-gray-100 focus" type="button">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                </button>

                <!-- Dropdown menu, Start-->
                <div id="dropdownDotsHorizontal{{ $num }}" class="z-10 hidden bg-white opacity-90 divide-y divide-gray-100 rounded-lg shadow drop-shadow w-[10.5rem]">
                    <ul class="py-2 text-sm text-gray-900 font-medium" aria-labelledby="dropdownMenuIconHorizontalButton">

                        <div data-modal-target="popup-edit" data-modal-toggle="popup-edit{{ $num }}" class="flex px-4 py-2 text-sm  hover:bg-gray-100 cursor-pointer" type="button">
                            <img class="h-5" src="img/icon/titik-3/edit.svg" alt=""> <span class="ml-2 my-auto">Edit Jawaban</span>
                        </div>

                        <div data-modal-target="popup-hapus" data-modal-toggle="popup-hapus{{ $num }}" class="flex px-3 py-2 text-sm text-[#FF1A1A] hover:bg-gray-100 cursor-pointer" type="button">
                            <img class="h-6" src="img/icon/titik-3/hapus.svg" alt=""> <span class="ml-2 my-auto">Hapus Jawaban</span>
                        </div>

                        <li class=" hover:bg-gray-100">
                        <!-- Tombol Lapor, Start -->
                        <button data-modal-target="modal_lapor_jawaban" data-modal-toggle="modal_lapor_jawaban{{ $num }}" class="flex px-3 py-2" type="button">
                            <img class="h-6" src="img/icon/titik-3/lapor.svg" alt=""> <span class="ml-2"> Lapor Jawaban </span>
                        </button>
                        <!-- Tombol Lapor, End -->
                        </li>

                    </ul>
                </div>
                <!-- Dropdown menu, End-->

                <!-- Main pop up Lapor, Start -->
                <div id="modal_lapor_jawaban{{ $num }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t">
                                <h3 class="text-xl flex font-semibold text-gray-900">
                                    <img src="img/icon/titik-3/lapor.svg" alt="">
                                    <span class="my-auto pl-1"> Terms of Service </span>
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="modal_lapor_jawaban">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="/mod/report" method="post">
                            @csrf
                            <input type="text" name="answer_id" hidden value="{{ $answer->id }}">
                            <input type="text" name="user_id" hidden value="{{ auth()->user()->id }}">
                            <div>
                                <ul class="bg-white text-gray-700 font-medium border border-gray-200 rounded-lg">
                                    <li class="py-2 border-b border-gray-200">
                                        <div class="flex items-center pl-3">
                                            <input type="radio" id="spam{{ $num }}" name="report_type" value="spam">
                                            <label class="w-full pl-2" for="spam{{ $num }}">Spam</label>
                                        </div>
                                    </li>
                                    <li class="py-2 border-b border-gray-200">
                                        <div class="flex items-center pl-3">
                                            <input type="radio" id="ujaran_kebencian{{ $num }}" name="report_type" value="ujaran kebencian">
                                            <label class="w-full pl-2" for="ujaran_kebencian{{ $num }}">Ujaran Kebencian</label>
                                        </div>
                                    </li>
                                    <li class="py-2 border-b border-gray-200">
                                        <div class="flex items-center pl-3">
                                            <input type="radio" id="pelecehan{{ $num }}" name="report_type" value="pelecehan/perundungan">
                                            <label class="w-full pl-2" for="pelecehan{{ $num }}">Pelecehan atau perundungan</label>
                                        </div>
                                    </li>
                                    <li class="py-2 border-b border-gray-200">
                                        <div class="flex items-center pl-3">
                                            <input type="radio" id="aktivitas-perundungan{{ $num }}" name="report_type" value="aktivitas perundungan">
                                            <label class="w-full pl-2" for="aktivitas-perundungan{{ $num }}">Aktivitas perundungan</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b justify-end">
                                <button data-modal-hide="modal_lapor_jawaban" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                                <button data-modal-hide="modal_lapor_jawaban" type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Report</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Main pop up Lapor, End -->

                <!-- Titik tiga [menu], End -->

                <!-- POP UP HAPUS JAWABAN / PERTANYAAN, START -->
                <div id="popup-hapus{{ $num }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <div class="p-6 text-center">
                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-800 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <h3 class="mb-5 text-lg font-medium text-gray-800">Apakah kamu yakin ingin Menghapus?</h3>
                                <form action="{{ url('/answer/'. $answer->id) }}" method="post" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button data-modal-hide="popup-hapus" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Iya</button>
                                </form>

                                <button data-modal-hide="popup-hapus" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- POP UP HAPUS JAWABAN / PERTANYAAN, END -->

                <!-- POP UP Edit JAWABAN / PERTANYAAN, START -->
                <div id="popup-edit{{ $num }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative max-w-full max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <div class="p-6">

                                <!-- TOMBOL SILANG -->
                                <div class="absolute top-3 right-2 rounded-md p-2 hover:bg-gray-100 inline-flex items-center cursor-pointer">
                                    <svg class="h-4 w-4" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.9995 15.6833L3.60788 25.075C3.25649 25.4264 2.80927 25.6021 2.26621 25.6021C1.72316 25.6021 1.27593 25.4264 0.924543 25.075C0.573155 24.7236 0.397461 24.2764 0.397461 23.7333C0.397461 23.1902 0.573155 22.743 0.924543 22.3916L10.3162 13L0.924543 3.6083C0.573155 3.25692 0.397461 2.80969 0.397461 2.26664C0.397461 1.72358 0.573155 1.27636 0.924543 0.924971C1.27593 0.573582 1.72316 0.397888 2.26621 0.397888C2.80927 0.397888 3.25649 0.573582 3.60788 0.924971L12.9995 10.3166L22.3912 0.924971C22.7426 0.573582 23.1898 0.397888 23.7329 0.397888C24.2759 0.397888 24.7232 0.573582 25.0745 0.924971C25.4259 1.27636 25.6016 1.72358 25.6016 2.26664C25.6016 2.80969 25.4259 3.25692 25.0745 3.6083L15.6829 13L25.0745 22.3916C25.4259 22.743 25.6016 23.1902 25.6016 23.7333C25.6016 24.2764 25.4259 24.7236 25.0745 25.075C24.7232 25.4264 24.2759 25.6021 23.7329 25.6021C23.1898 25.6021 22.7426 25.4264 22.3912 25.075L12.9995 15.6833Z" fill="#585858"/>
                                    </svg>
                                </div>


                                <!-- NICK NAME -->
                                <div class="w-44 ml-2 pt-3">
                                    <div class="flex">
                                    <a href="#" class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                                        <img class="h-full w-full object-cover" src="img/{{ $answer->user->photo_profile }}" alt="profile">
                                    </a>
                                    <a href="#" class="text-xs md:text-sm my-auto ml-2 text-gray-900 font-bold">{{ $answer->user->fullname }}</a>
                                    </div>
                                </div>

                                <!-- TextAREA EDIT -->
                                {{-- start form edit --}}
                                <form action="{{ url('/answer/'. $answer->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex justify-center my-2 mx-1">
                                        <textarea class="resize-none outline-none rounded-md border-bgc text-sm text-gray-800 p-2 placeholder:text-gray-500 h-32 md:h-80" name="content" cols="150" maxlength="1000" placeholder="Ini apa isi sih yang mau di edit . . . . . .">{{ $answer->content }}</textarea>
                                        <!--
                                            RIIIIIII DISINI ID NYA APA?
                                            RIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
                                        -->
                                    </div>

                                    <div class="flex justify-end mt-5">
                                        <button type="submit" class="text-white bg-warna2h hover:bg-warna2focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2focus:outline-none">Simpan</button>
                                    </div>
                                </form>
                                {{-- end form edit --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- POP UP EDIT JAWABAN / PERTANYAAN, END -->
            </div>

            <!-- Isi Pertanyaan, Start -->
            <div id="isiTopik" class="mx-9 mt-3">
                <span class="font-bold text-gray-900">{{ $answer->content }}
                    <!-- Misal Ada Gambar -->
                    @if (isset($answer->question->image)) <br>
                    <button data-modal-target="lihat-gambar" data-modal-toggle="lihat-gambar{{ $num }}" class="text-blue-800 text-xs" type="button"> (Lihat Gambar)
                    </button>
                    @endif
                </span>
                <!-- Main modal -->
                <div id="lihat-gambar{{ $num }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <button type="button" data-modal-hide="lihat-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                        <!-- Modal content -->
                        <!-- Ini gambarnya -->
                        <img class="h-full w-full m-auto" src="img/postingan/{{ $answer->question->image ?? '' }}" alt="">
                    </button>
                </div>
            </div>
            <!-- Isi Pertanyaan, End -->

            <!-- Deskripsi Topik -->
            <div id="deskripsi" class="mx-9 mt-2">
                <span class="text-xs font-semibold text-gray-700 ">{{--$jawaban--}}
                    <!-- <a id="lanjutDeskripsi" class="text-blue-800" href="#"> (Lebih lanjut)</a> -->
                </span>
            </div>


            <!-- Gambar post -->
            @if (isset($answer->image))
            <div class="mx-7 mt-3">
                <div class="aspect-[4/3] rounded-md bg-gray-600 relative border-2 overflow-hidden">
                    <!-- Ini background Img nya -->
                    <img class="h-full w-full opacity-30 blur-sm absolute" src="img/postingan/{{ $answer->image }}" alt="">
                    <!-- Ini gambar depannya -->
                    <button data-modal-target="lihat-full-gambar" data-modal-toggle="lihat-full-gambar{{ $num }}" class="h-full w-full m-auto absolute right-0 left-0" type="button">
                        <img class="h-full w-full object-contain" src="img/postingan/{{ $answer->image }}" alt="">
                    </button>
                </div>
                <!-- Main modal -->
                <div id="lihat-full-gambar{{ $num }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <button type="button" data-modal-hide="lihat-full-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                        <!-- Modal content -->
                        <!-- Ini gambarnya -->
                        <img class="h-full w-full m-auto" src="img/postingan/{{ $answer->image }}" alt="">
                    </button>
                </div>
            </div>
            @endif

        </div>
        <!-- End Posting -->


    </div>
    @endforeach

    </div>
<!-- Ini apasih namanya, pokoknya dalemnya ada topik ama postingan. End -->

@endsection
