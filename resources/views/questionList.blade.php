@extends('layouts.main')
@section('container')

        <!-- Content Start -->
        <div class="h-[95vh] md:h-[100vh] pb-20 md:pb-5 overflow-y-auto overflow-x-hidden mx-4 rounded pt-2 shadow">
            <div class="w-full bg-white pt-4 pb-2 flex border-b rounded-t">
                <img class="ml-3 h-5" src="img/Icon/Quest.svg" alt="">
                <span class="ml-1 text-warna3 font-bold text-sm">Pertanyaan untuk anda</span>
            </div>

            @foreach ($questions as $num => $que)
                
            <!-- Pertanyaan pake gambar start -->
                <div class="bg-white relative pb-2 pt-3 mb-1 shadow">
                    <!-- Profile -->
                    <div class="flex ml-3">
                        <div class="aspect-square h-10 overflow-hidden rounded-full">
                            <a href="#">
                             <img class="h-full w-full object-cover" src="img/{{$que->user->photo_profile}}" alt=""> </a>
                        </div>
                        <a href="#" class="font-semibold text-sm my-auto ml-1 text-gray-800">{{ $que->user->fullname }}</a>
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
                            {{-- @if($idUser == $id_user) --}}
                            <li>
                                <a href="#" class="flex px-4 py-2 hover:bg-gray-100"> <img class="h-5" src="img/icon/titik-3/edit.svg" alt=""> <span class="ml-2"> Edit Jawaban </span> </a>
                            </li>
                            <div  data-modal-target="popup-hapus" data-modal-toggle="popup-hapus{{ $num }}" class="flex px-3 py-2 text-sm text-[#FF1A1A] hover:bg-gray-100 cursor-pointer" type="button">
                                <img class="h-6" src="img/icon/titik-3/hapus.svg" alt=""> <span class="ml-2 my-auto">Hapus Jawaban</span>
                            </div>
                            {{-- @else --}}
                            <li>
                                <a href="#" class="flex px-3 py-2 hover:bg-gray-100"> <img class="h-6" src="img/icon/titik-3/lapor.svg" alt=""> <span class="ml-2"> Lapor Jawaban </span> </a>
                            </li>
                            {{-- @endif --}}
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
                                        <form action="{{ route('question.destroy', $que->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" data-modal-hide="popup-hapus" {{-- onclick="location.href='edit/deltanya.php?id={{ $num }}'" --}} type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Iya
                                        </button>
                                        <button type="button" data-modal-hide="popup-hapus" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">Tidak</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POP UP HAPUS JAWABAN / PERTANYAAN, END -->
                    </div>
                    <!-- menu, End -->


                    <!-- isi pertanyaan  -->
                    <div class="mx-5 mt-2 grid">
                        <span class="font-bold text-gray-900">{{-- $pertanyaan --}}
                            <!-- Misal Ada Gambar -->
                            @if (isset($que->image)) <br>
                            <button data-modal-target="lihat-gambar" data-modal-toggle="lihat-gambar{{ $num }}" 
                                class="text-blue-800 text-xs" type="button">(Lihat Gambar)
                            </button> 
                            @endif
                        </span>

                        <!-- Main modal -->
                        <div id="lihat-gambar{{ $num }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <button type="button" data-modal-hide="lihat-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                                <!-- Modal content -->
                                <!-- Ini gambarnya -->
                                <img class="h-full w-full m-auto" src="img/postingan/{{-- $gambar_tanya --}}" alt="">
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
                            <div style="background-color: rgba(230, 230, 230, 0.712);" class="border-slate-700 border-2 grid grid-cols-1 md:grid-cols-2 gap-[0.10rem] md:gap-4 rounded-lg overflow-hidden">
                                <!-- Ini jawaban kita, Start -->
                                <div class="col-span-1 bg-white my-auto md:mx-2 rounded-t-md md:rounded-md container">

                                    <!-- Foto Profile -->
                                    <div class="flex ml-2 mt-2 w-44">
                                        <div class="bg-gray-500 aspect-square h-9 overflow-hidden rounded-full">
                                            <img class="h-full w-full object-cover" src="img/User.svg{{-- $pp_user --}}" alt="">
                                        </div>
                                        <span class="text-xs md:text-sm my-auto ml-2 text-gray-700 font-bold">{{ $thisUser->fullname }}</span>
                                    </div>

                                    <form action="post/post-jawab.php" method="post" enctype="multipart/form-data">
                                    <!-- TextArea -->
                                    <div class="flex justify-center my-2 mx-1">
                                        <textarea class="resize-none outline-none rounded-md border-bgc text-sm text-gray-800 p-2 placeholder:text-gray-500 h-32 md:h-60" name="jawaban" id="" cols="67" maxlength="1000" placeholder="Buatlah sebuah jawaban . . . . ."></textarea>
                                        <input type="hidden" name="id_tanya" value="{{ $num }}">
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
                                <div class="col-span-1 bg-white border-l overflow-auto h-[40rem]">

                                    <!-- Contoh user upload pake gambar, Start -->
                                    {{-- $jawab_orang = mysqli_query($conn,"SELECT user.fullname, user.foto_profil, jawab.jawaban, jawab.gambar_jawab FROM jawab JOIN user ON jawab.id_user=user.id_user WHERE id_tanya = $num") --}}

                                    {{-- @foreach ($questions as $item) --}}
                                    <div class="mt-4">
                                        <!-- Foto Profile -->
                                        <a class="flex ml-2 mt-2 w-44" href="#">
                                            <div class="bg-gray-500 aspect-square h-9 overflow-hidden rounded-full">
                                                <img class="h-full w-full object-cover" src="img/profile/{{-- $item->answer->user->photo_profile --}}" alt="">
                                            </div>
                                            <span class="text-xs md:text-sm my-auto ml-2 text-gray-700 font-bold">{{-- $item->answer->user->fullname --}} fullname</span>
                                        </a>

                                        <!-- isi jawaban orang -->
                                        <div class="mx-5 my-2">
                                            <span class="text-sm text-gray-700">{{-- $item->answer->content --}}</span>
                                        </div>

                                        <!-- Gambar post -->
                                        <div class="mx-5 mt-3">
                                            {{-- @if (isset($item->answer->image)) --}}
                                            <div class="aspect-[6/3] container rounded-md bg-gray-600 relative border-2 overflow-hidden">
                                                <!-- Ini background Img nya -->
                                                <img class="object-none object-center h-full w-full opacity-30 blur-sm absolute" src="img/postingan/{{-- $item->answer->image --}}?>" alt="">
                                                <!-- Ini gambar depannya -->
                                                <button data-modal-target="lihat-full-gambar" data-modal-toggle="lihat-full-gambar" class="h-full w-full m-auto absolute right-0 left-0" type="button">
                                                    <img class="h-full w-full object-contain" src="img/postingan/{{-- $item->answer->image --}}" alt="">
                                                </button>
                                            </div>
                                            
                                            <!-- Main modal -->
                                            <div id="lihat-full-gambar" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <button type="button" data-modal-hide="lihat-full-gambar" class="relative cursor-none w-full max-w-4xl max-h-full">
                                                    <!-- Modal content -->
                                                    <!-- Ini gambarnya -->
                                                    <img class="h-full w-full m-auto" src="img/postingan/{{-- $item->answer->image --}}" alt="">
                                                </button>
                                            </div>
                                            {{-- @endif --}}
                                        </div>
                                        <hr class="mx-4 mt-2">
                                    </div>
                                    <!-- Contoh user upload pake gambar, End -->
                                    {{-- @endforeach --}}

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