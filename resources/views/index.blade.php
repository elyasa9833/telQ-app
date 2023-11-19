@extends('layouts.main')

@section('container')
<!-- Ini apasih namanya, pokoknya dalemnya ada topik ama postingan. Start -->
<div class="overflow-auto h-[80vh] md:h-[90.7vh]">
    <div class="">
        
        <div class="mb-14 md:mb-5">

            <!-- Start Posting -->                        
            <div class="bg-white mt-1 md:mt-2 mx-5 relative rounded sm:w-4/6 sm:mx-auto pb-6">

                <!-- Nama profile -->
                <div class="w-44 ml-2 pt-3">
                    <div class="flex">
                    <a href="#" class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                        <img class="h-full w-full object-cover" src="../img/" alt="profile">
                    </a>
                    <a href="#" class="text-xs md:text-sm my-auto ml-2 text-gray-900 font-bold">Fullname</a>
                        
                    </div>
                </div>
                
                <!-- menu -->
                <div id="menu" class="absolute right-0 top-0 mt-3 mr-3">
                    <!-- Titik tiga [menu], Start -->
                    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{-- $id_jawab --}}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-700 bg-white rounded-lg hover:bg-gray-100 focus" type="button"> 
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                    </button>
                    
                    <!-- Dropdown menu, Start-->
                    <div id="dropdownDotsHorizontal{{-- $id_jawab --}}" class="z-10 hidden bg-white opacity-90 divide-y divide-gray-100 rounded-lg shadow drop-shadow w-[10.5rem]">
                        <ul class="py-2 text-sm text-gray-900 font-medium" aria-labelledby="dropdownMenuIconHorizontalButton">

                            <li>
                                <a href="#" class="flex px-4 py-2 hover:bg-gray-100"> <img class="h-5" src="../Img/icon/titik-3/edit.svg" alt=""> <span class="ml-2"> Edit Jawaban </span> </a>
                            </li>
                            <div data-modal-target="popup-hapus" data-modal-toggle="popup-hapus{{-- $id_jawab --}}" class="flex px-3 py-2 text-sm text-[#FF1A1A] hover:bg-gray-100 cursor-pointer" type="button">
                                <img class="h-6" src="../Img/icon/titik-3/hapus.svg" alt=""> <span class="ml-2 my-auto">Hapus Jawaban</span>
                            </div>

                            <li class=" hover:bg-gray-100">
                            <!-- Tombol Lapor, Start -->
                            <button data-modal-target="modal_lapor_jawaban" data-modal-toggle="modal_lapor_jawaban{{-- $id_jawab --}}" class="flex px-3 py-2" type="button">
                                <img class="h-6" src="../Img/icon/titik-3/lapor.svg" alt=""> <span class="ml-2"> Lapor Jawaban </span>
                            </button>
                            <!-- Tombol Lapor, End -->
                            </li>

                        </ul>
                    </div>
                    <!-- Dropdown menu, End-->

                    <!-- Main pop up Lapor, Start -->
                    <div id="modal_lapor_jawaban{{-- $id_jawab --}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t">
                                    <h3 class="text-xl flex font-semibold text-gray-900">
                                        <img src="../Img/icon/titik-3/lapor.svg" alt="">
                                        <span class="my-auto pl-1"> Terms of Service </span>
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="modal_lapor_jawaban">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="post/post-report.php" method="post">
                                <input type="text" name="id_jawab" hidden value="{{-- $id_jawab --}}">
                                <div>
                                    <ul class="bg-white text-gray-700 font-medium border border-gray-200 rounded-lg">
                                        <li class="py-2 border-b border-gray-200">
                                            <div class="flex items-center pl-3">
                                                <input type="radio" id="spam{{-- $id_jawab --}}" name="list-lapor" value="1">
                                                <label class="w-full pl-2" for="spam{{-- $id_jawab --}}">Spam</label>
                                            </div>
                                        </li>
                                        <li class="py-2 border-b border-gray-200">
                                            <div class="flex items-center pl-3">
                                                <input type="radio" id="ujaran_kebencian{{-- $id_jawab --}}" name="list-lapor" value="2">
                                                <label class="w-full pl-2" for="ujaran_kebencian{{-- $id_jawab --}}">Ujaran Kebencian</label>
                                            </div>
                                        </li>
                                        <li class="py-2 border-b border-gray-200">
                                            <div class="flex items-center pl-3">
                                                <input type="radio" id="pelecehan{{-- $id_jawab --}}" name="list-lapor" value="3">
                                                <label class="w-full pl-2" for="pelecehan{{-- $id_jawab --}}">Pelecehan atau perundungan</label>
                                            </div>
                                        </li>
                                        <li class="py-2 border-b border-gray-200">
                                            <div class="flex items-center pl-3">
                                                <input type="radio" id="aktivitas-perundungan{{-- $id_jawab --}}" name="list-lapor" value="4">
                                                <label class="w-full pl-2" for="aktivitas-perundungan{{-- $id_jawab --}}">Aktivitas perundungan</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b justify-end">
                                    <button data-modal-hide="modal_lapor_jawaban" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                                    <button data-modal-hide="modal_lapor_jawaban" type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" name="report">Report</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Main pop up Lapor, End -->

                    <!-- Titik tiga [menu], End -->

                    <!-- POP UP HAPUS JAWABAN / PERTANYAAN, START -->
                    <div id="popup-hapus{{-- $id_jawab --}}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow">
                                <div class="p-6 text-center">
                                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-800 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <h3 class="mb-5 text-lg font-medium text-gray-800">Apakah kamu yakin ingin Menghapus?</h3>
                                    <button data-modal-hide="popup-hapus" {{--onclick="location.href='#'"--}} type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Iya
                                    </button>
                                    <button data-modal-hide="popup-hapus" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- POP UP HAPUS JAWABAN / PERTANYAAN, END -->
                </div>

                <!-- Isi Pertanyaan, Start -->
                <div id="isiTopik" class="mx-9 mt-3">
                    <span class="font-bold text-gray-900">{{--$pertanyaan--}} Pertanyaan
                        <!-- Misal Ada Gambar -->
                        {{-- @if ($gambar_tanya != '0') --}} <br>
                        <button data-modal-target="lihat-gambar" data-modal-toggle="lihat-gambar{{-- $id_jawab --}}"
                            class="text-blue-800 text-xs" type="button"> (Lihat Gambar) 
                        </button>
                        {{-- @endif --}}
                    </span>
                    <!-- Main modal -->
                    <div id="lihat-gambar{{-- $id_jawab --}}" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <button type="button" data-modal-hide="lihat-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                            <!-- Modal content -->
                            <!-- Ini gambarnya -->
                            <img class="h-full w-full m-auto" src="../img/postingan/{{--$gambar_tanya --}}" alt="">
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
                {{-- @if ($gambar !== '0') --}}
                <div class="mx-7 mt-3">
                    <div class="aspect-[4/3] rounded-md bg-gray-600 relative border-2 overflow-hidden">
                        <!-- Ini background Img nya -->
                        <img class="h-full w-full opacity-30 blur-sm absolute" src="../img/postingan/{{-- $gambar --}}" alt="">
                        <!-- Ini gambar depannya -->
                        <button data-modal-target="lihat-full-gambar" data-modal-toggle="lihat-full-gambar{{-- $id_jawab --}}" class="h-full w-full m-auto absolute right-0 left-0" type="button">
                            <img class="h-full w-full object-contain" src="../img/postingan/{{-- $gambar --}}" alt="">
                        </button>
                    </div>
                    <!-- Main modal -->
                    <div id="lihat-full-gambar{{-- $id_jawab --}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <button type="button" data-modal-hide="lihat-full-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                            <!-- Modal content -->
                            <!-- Ini gambarnya -->
                            <img class="h-full w-full m-auto" src="../img/postingan/{{-- $gambar --}}" alt="">
                        </button>
                    </div>
                </div>
                {{-- @endif --}}

            </div>
            <!-- End Posting -->
            
            
        </div>

    </div>
</div>
<!-- Ini apasih namanya, pokoknya dalemnya ada topik ama postingan. End -->
    
@endsection