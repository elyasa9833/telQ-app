@extends('layouts.main')
@section('container')

        <!-- Content Start -->
        <div class="h-[89vh] md:h-[93vh] pb-20 md:pb-5 overflow-y-auto overflow-x-hidden mx-4 rounded pt-2 shadow">
            <div class="w-full md:w-5/6 md:mx-auto bg-white pt-4 pb-2 border-b rounded-t">
                <div class="flex mb-4">
                    <img class="ml-3 h-5 md:h-7" src="img/Icon/Quest.svg" alt="">
                    <span class="ml-3 text-warna3 font-bold text-sm md:text-xl">Pertanyaan untuk anda</span>
                </div>
                <hr>
            </div>

            @foreach ($questions as $num => $que)

            <!-- Pertanyaan pake gambar start -->
                <div class="bg-white relative pb-2 pt-3 mb-3 shadow md:w-5/6 md:mx-auto">
                    <!-- Profile -->
                    <div class="flex ml-3">
                        <div class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                            <a href="#">
                                <img class="h-full w-full object-cover" src="img/{{$que->user->photo_profile}}" alt=""> </a>
                        </div>
                        <a href="{{ url('/user/' .$que->user->username) }}" class="font-semibold text-sm my-auto ml-1 text-gray-800">{{ $que->user->fullname }}</a>
                    </div>

                    <!-- menu, Start-->
                    <div class="absolute right-4 top-2">
                        <!-- Titik tiga [menu], Start -->
                        <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{ $num }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-700 bg-white rounded-lg hover:bg-gray-100 focus" type="button">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu, Start-->
                        <div id="dropdownDotsHorizontal{{ $num }}" class="z-10 hidden bg-white opacity-90 divide-y divide-gray-100 rounded-lg shadow drop-shadow w-[12rem]">
                            <ul class="py-2 text-sm text-gray-900 font-medium" aria-labelledby="dropdownMenuIconHorizontalButton">

                                @if($que->user_id == auth()->user()->id)
                                <div  data-modal-target="popup-edit" data-modal-toggle="popup-edit{{ $num }}" class="flex px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer" type="button">
                                    <img class="h-5" src="img/icon/titik-3/edit.svg" alt=""> <span class="ml-2 my-auto">Edit Pertanyaan</span>
                                </div>

                                <div  data-modal-target="popup-hapus" data-modal-toggle="popup-hapus{{ $num }}" class="flex px-3 py-2 text-sm text-[#FF1A1A] hover:bg-gray-100 cursor-pointer" type="button">
                                    <img class="h-6" src="img/icon/titik-3/hapus.svg" alt=""> <span class="ml-2 my-auto">Hapus Pertanyaan</span>
                                </div>

                                @else
                                <!-- Tombol Lapor, Start -->
                                <div data-modal-target="modal_lapor_jawaban" data-modal-toggle="modal_lapor_jawaban{{ $num }}" class="flex px-3 py-2 hover:bg-gray-100 cursor-pointer" type="button">
                                    <img class="h-6" src="img/icon/titik-3/lapor.svg" alt=""> <span class="ml-2">Lapor Pertanyaan</span>
                                </div>
                                <!-- Tombol Lapor, End -->
                                @endif
                            </ul>
                        </div>
                        <!-- Dropdown menu, End-->
                        <!-- Titik tiga [menu], End -->

                        <!-- POP UP HAPUS JAWABAN / PERTANYAAN, START -->
                        <div id="popup-hapus{{ $num }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-800 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-medium text-gray-800">Apakah kamu yakin ingin Menghapus?</h3>
                                        <form action="{{ url('/question-list/'. $que->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" data-modal-hide="popup-hapus" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Iya</button>
                                        </form>
                                    <button type="button" data-modal-hide="popup-hapus" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tidak</button>
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
                                    <div class="absolute top-3 right-2 rounded-md p-2 hover:bg-gray-100 inline-flex items-center cursor-pointer" onclick="closePopup('{{ $num }}')">
                                        <svg class="h-4 w-4" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.9995 15.6833L3.60788 25.075C3.25649 25.4264 2.80927 25.6021 2.26621 25.6021C1.72316 25.6021 1.27593 25.4264 0.924543 25.075C0.573155 24.7236 0.397461 24.2764 0.397461 23.7333C0.397461 23.1902 0.573155 22.743 0.924543 22.3916L10.3162 13L0.924543 3.6083C0.573155 3.25692 0.397461 2.80969 0.397461 2.26664C0.397461 1.72358 0.573155 1.27636 0.924543 0.924971C1.27593 0.573582 1.72316 0.397888 2.26621 0.397888C2.80927 0.397888 3.25649 0.573582 3.60788 0.924971L12.9995 10.3166L22.3912 0.924971C22.7426 0.573582 23.1898 0.397888 23.7329 0.397888C24.2759 0.397888 24.7232 0.573582 25.0745 0.924971C25.4259 1.27636 25.6016 1.72358 25.6016 2.26664C25.6016 2.80969 25.4259 3.25692 25.0745 3.6083L15.6829 13L25.0745 22.3916C25.4259 22.743 25.6016 23.1902 25.6016 23.7333C25.6016 24.2764 25.4259 24.7236 25.0745 25.075C24.7232 25.4264 24.2759 25.6021 23.7329 25.6021C23.1898 25.6021 22.7426 25.4264 22.3912 25.075L12.9995 15.6833Z" fill="#585858"/>
                                        </svg>
                                    </div>


                                    <!-- NICK NAME -->
                                    <div class="ml-2 pt-3">
                                        <div class="flex">
                                        <a href="#" class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                                            <img class="h-full w-full object-cover" src="img/{{ auth()->user()->photo_profile }}" alt="profile">
                                        </a>
                                        <a href="#" class="text-xs md:text-sm my-auto ml-2 text-gray-900 font-bold">{{ auth()->user()->fullname }}</a>
                                        </div>
                                    </div>

                                    <!-- TextAREA EDIT -->
                                    {{-- start form edit --}}
                                    <form action="{{ url('/question-list/'. $que->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="flex justify-center my-2 mx-1">
                                            <textarea class="resize-none outline-none rounded-md border-bgc text-sm text-gray-800 p-2 placeholder:text-gray-500 h-32 md:h-80" name="content" cols="150" maxlength="1000" placeholder="Ini apa isi sih yang mau di edit . . . . . .">{{ $que->content }}</textarea>
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
                    <!-- menu, End -->


                    <!-- isi pertanyaan  -->
                    <div class="mx-5 mt-2 grid">
                        <span class="font-bold text-gray-900">{{-- $pertanyaan --}}
                            <!-- Misal Ada Gambar -->
                            @if (isset($que->image)) <br>
                            <button data-modal-target="lihat-gambar" data-modal-toggle="lihat-gambar{{ $num }}" class="text-blue-800 text-xs" type="button">(Lihat Gambar)
                            </button>
                            @endif
                        </span>

                        <!-- Main modal -->
                        <div id="lihat-gambar{{ $num }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <button type="button" data-modal-hide="lihat-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                                <!-- Modal content -->
                                <!-- Ini gambarnya -->
                                <img class="h-full w-full m-auto" src="img/postingan/{{ $que->image }}" alt="">
                            </button>
                        </div>

                        <span class="font-semibold text-sm mt-1 text-gray-700">{{ $que->content }}</span>

                    </div>
                    <!-- Tombol Jawaban, Start -->
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal{{ $num }}" class="border-2 my-2 w-32 rounded-lg py-2 ml-4 cursor-pointer bg-white hover:bg-gray-100" type="button">
                        <div class="flex text-warna3 hover:text-warna3h">
                            <svg class="fill-current ml-3 h-5" width="28" height="23" viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 22.5V19.3125L21.45 11.3625L24.6375 14.55L16.6875 22.5H13.5ZM0 15V12H10.5V15H0ZM25.6875 13.5L22.5 10.3125L23.5875 9.225C23.8625 8.95 24.2125 8.8125 24.6375 8.8125C25.0625 8.8125 25.4125 8.95 25.6875 9.225L26.775 10.3125C27.05 10.5875 27.1875 10.9375 27.1875 11.3625C27.1875 11.7875 27.05 12.1375 26.775 12.4125L25.6875 13.5ZM0 9V6H16.5V9H0ZM0 3V0H16.5V3H0Z" fill="#36465C" />
                            </svg>
                            <span class="font-bold ml-1 text-sm">Jawab </span>
                        </div>
                    </button>

                    <!-- Pop up, Tombol Jawaban. Start -->
                    <div id="defaultModal{{ $num }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-[89%] md:w-[80%] h-[40rem]">
                            <!-- Modal content -->
                            <!-- Bentar ini jadi pop up nya jawab, Start -->
                            <div style="background-color: rgba(230, 230, 230, 0.712);" class="border-slate-700 border-2 grid grid-cols-1 md:grid-cols-5 gap-[0.10rem] md:gap-4 rounded-lg overflow-hidden">
                                <!-- Ini jawaban kita, Start -->
                                <div class="col-span-3 bg-white h-fit my-auto md:mx-2 rounded-t-md md:rounded-md container">

                                    <!-- Foto Profile -->
                                    <div class="flex ml-5 mt-2">
                                        <div class="bg-bgc aspect-square h-9 overflow-hidden rounded-full">
                                            <img class="h-full w-full object-cover" src="img/profile/{{ $que->user->photo_profile }}" alt="">
                                        </div>
                                        <span class="text-xs md:text-sm my-auto ml-2 text-gray-700 font-bold">{{ $que->user->fullname }}</span>

                                    </div>
                                    <div class="flex ml-5 mt-2">

                                        <span class="text-base ml-4 my-1 font-semibold text-gray-700 h-auto">{{ $que->content }}</span>
                                    </div>

                                    <form action="{{ url('/answer') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!-- TextArea -->
                                        <div class="flex justify-center my-2 mx-1">
                                            <textarea class="resize-none outline-none rounded-md border-bgc text-sm text-gray-800 p-2 placeholder:text-gray-500 h-32 md:h-80" name="content" id="" cols="90" maxlength="1000" placeholder="Buatlah sebuah jawaban..."></textarea>
                                            <input type="hidden" name="question_id" value="{{ $que->id }}">
                                        </div>

                                        <!-- Tambah Gambar & Share  -->
                                        <div class="flex justify-end">
                                            <label for="input-gambar">
                                                <img class="h-8 mr-2 my-2 cursor-pointer" src="img/icon/round-image.svg" alt="">
                                            </label>
                                            <input id="input-gambar" name="gambar_jawab" type="file" accept="image/*" class="hidden">

                                            <button type="submit" name="submit"> <img class="h-6 mr-4 my-3" src="img/icon/share.svg" alt=""> </button>
                                        </div>
                                    </form>

                                </div>
                                <!-- Ini jawaban kita, End -->

                                <!-- Ini jawab Orang lain, Start -->
                                <div class="col-span-2 bg-white border-l overflow-auto h-[40rem]">

                                    <!-- Contoh user upload pake gambar, Start -->
                                    {{-- $jawab_orang = mysqli_query($conn,"SELECT user.fullname, user.foto_profil, jawab.jawaban, jawab.gambar_jawab FROM jawab JOIN user ON jawab.id_user=user.id_user WHERE id_tanya = $num") --}}

                                    @php $answerLoop = $answers->where('question_id', $que->id) @endphp
                                    @foreach ($answerLoop as $numitem => $item)
                                    <div class="mt-4">
                                        <!-- Foto Profile -->
                                        <a class="flex mx-2 mt-2" href="#">
                                            <div class="bg-bgc aspect-square h-9 overflow-hidden rounded-full">
                                                <img class="h-full w-full object-cover" src="img/profile/{{ $item->user->photo_profile }}" alt="">
                                            </div>
                                            <span class="text-xs md:text-sm my-auto ml-2 text-gray-700 font-bold">{{ $item->question_id }} {{ $item->user->fullname }}</span>
                                        </a>

                                        <!-- isi jawaban orang -->
                                        <div class="mx-5 my-2">
                                            <span class="text-sm text-gray-700">{{$item->content}}</span>
                                        </div>

                                        <!-- Gambar post -->
                                        <div class="mx-5 mt-3">
                                            @if (isset($item->image))
                                            <div class="h-20 w-32 outline outline-1 outline-gray-300 container bg-gray-600 relative border-2 overflow-hidden">
                                                <!-- Ini background Img nya -->
                                                <img class="object-none object-center h-full w-full opacity-30 blur-sm absolute" src="img/postingan/{{ $item->image }}" alt="">
                                                <!-- Ini gambar depannya -->
                                                <button data-modal-target="lihat-full-gambar" data-modal-toggle="lihat-full-gambar{{ $que->id. $numitem }}" class="h-full w-full m-auto absolute right-0 left-0" type="button">
                                                    <img class="h-full w-full object-contain" src="img/postingan/{{ $item->image }}" alt="">
                                                </button>
                                            </div>
                                            @endif

                                            <!-- Main modal -->
                                            <div id="lihat-full-gambar{{ $que->id. $numitem }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <button type="button" data-modal-hide="lihat-full-gambar" class="relative cursor-none w-full max-w-[90rem] max-h-full">
                                                    <!-- Modal content -->
                                                    <!-- Ini gambarnya -->
                                                    <img class="h-full w-full m-auto outline  outline-gray-300" src="img/postingan/{{ $item->image }}" alt="">
                                                </button>
                                            </div>

                                        </div>
                                        <hr class="mx-4 mt-2">
                                    </div>
                                    <!-- Contoh user upload pake gambar, End -->
                                    @endforeach

                                </div>
                                <!-- Ini jawab Orang lain, End -->

                            </div>
                            <!-- Bentar ini jadi pop up nya jawab, End -->
                        </div>
                    </div>
                    <!-- Pop up, Tombol Jawaban. End -->

                </div>
            <!-- Pertanyaan pake gambar End-->
            @endforeach


        </div>
    </div>
@endsection
