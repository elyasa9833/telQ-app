<!-- Header Main section start -->
<div class="bg-white flex justify-between w-full h-max py-1 lg:py-2"> {{-- Disini Buat Nandain ada yg kuubah [py-2 md:py-2] (TTD:-Adrian) --}}

    {{-- Icon hp Start --}}
    <a href="{{ auth()->user()->role != 'admin' ? '/' : '/dashboard/view-user' }}" class="my-auto ml-2 md:hidden"><img class="h-10" src="../Img/Logo (3).svg" alt=""></a>
    {{-- Icon hp End --}}

    {{-- createtopic --}}
    {!! Request::is('/') ? view('partials.createtopic') : '<div class=""></div>' !!}

    <!-- Gambar tiga biji diatas kanan, Start -->
    <div class="flex my-auto">
        
        @php 
            $storagePath = Request::is('mod/report') || Request::is('dashboard/view-user') || Request::is('user/*') || Request::is('editUser/*') ? "../":""; 
            $imgPath = (auth()->user()->photo_profile) ? asset('storage/'. auth()->user()->photo_profile) : $storagePath ."img/profile/User.svg";
        @endphp
        
        <div class="flex mr-2 md:mr-7">
            <!-- Tag Search -->
            <!-- Tombol Search -->
            <button id="dropdown-search" data-dropdown-toggle="dropdownsearch" class="my-auto mx-1" type="button">
                <img class="h-10 md:h-11 lg:h-12" src="{{ $storagePath }}img/Icon/TagSearch.svg" alt="">
            </button>
            <!-- Dropdown Search -->
            <div id="dropdownsearch" class="z-10 hidden">
                <form method="post">
                <input class="ml-8 h-8 border-2 border-blue-400 rounded-md text-gray-700 w-56" id="caritanya" name="caritanya" type="text">
                <div class="tanyaList text-black bg-white rounded-b-lg shadow ml-8 w-56"></div>
                <button type="submit" name="cari"></button>
                </form>
            </div>


            <!-- ini notif -->
            <a class="my-auto mx-1" href="#"> <img class="h-10 md:h-11 lg:h-12" src="{{ $storagePath }}img/Icon/Notif.svg" alt=""> </a>
            <!-- Foto Profile dengan dropdownnya anjay -->
            <!-- Profile Start -->
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white font-medium rounded-full text-sm" type="button">
                <!-- si foto profile -->
            <div class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                <img class="h-full w-full object-cover" src="{{ $imgPath }}" alt="">
            </div>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white rounded-lg shadow w-44">
                <ul class="py-2 text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                    <a href="/editUser/{{ auth()->user()->username }}" class="flex px-4 py-2 hover:bg-gray-100">
                            <img src="{{ $storagePath }}img/icon/Edit.svg" alt=""> <span class="my-auto ml-2"> Edit Profile </span>
                        </a>
                    </li>

                    <li data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="" type="button">
                        <div class="flex px-2 py-2 hover:bg-gray-100 cursor-pointer"> <img src="{{ $storagePath }}img/icon/Log-out.svg" alt=""> <span class="my-auto ml-2"> Log out</span></div>
                    </li>

                </ul>
            </div>

            <!-- Anjay Pop log out nya cok, Start btw -->
            <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-500 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-700">Anda yakin ingin Logout?</h3>

                            <form action="/logout" method="post" class="inline-flex">
                                @csrf
                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Ya</button>
                            </form>

                            <button data-modal-hide="popup-modal" type="button" class="text-white bg-warna3 hover:bg-warna3h rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Anjay Pop log out nya cok, End btw -->
            <!-- Profile End -->

        </div>
    </div>
    <!-- Gambar tiga biji diatas kanan, End -->

</div>
<!-- Header Main section End -->
