@extends('layouts.main')

@section('container')


<div class="h-[89vh] md:h-[93vh] pb-20 md:pb-5 overflow-auto mx-4 rounded pt-2 shadow">
    <div class="bg-white h-full relative">

        <!-- Edit Profile Start -->
        <div class="text-warna3h ml-5 pt-20 border-b mr-5">
            <!-- href yg ini bakal ke edit profile.html -->
            <a class="flex w-36 pb-2 hover:text-warna3" href="#">
                <svg class="fill-current h-7" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.8125 13.575L26.4 7.275L28.0125 5.6625C28.6125 5.0625 29.3315 4.7625 30.1695 4.7625C31.0075 4.7625 31.7135 5.0625 32.2875 5.6625L34.3875 7.8C34.9625 8.375 35.25 9.075 35.25 9.9C35.25 10.725 34.9625 11.425 34.3875 12L32.8125 13.575ZM7.5 35.55C6.675 35.55 5.9685 35.2565 5.3805 34.6695C4.7925 34.0825 4.499 33.376 4.5 32.55V11.55C4.5 10.725 4.794 10.0185 5.382 9.4305C5.97 8.8425 6.676 8.549 7.5 8.55H20.8875L11.8125 17.625C11.3875 18.05 11.0625 18.5375 10.8375 19.0875C10.6125 19.6375 10.5 20.2125 10.5 20.8125V26.55C10.5 27.375 10.794 28.0815 11.382 28.6695C11.97 29.2575 12.676 29.551 13.5 29.55H19.2375C19.8375 29.55 20.4125 29.4375 20.9625 29.2125C21.5125 28.9875 22 28.6625 22.425 28.2375L31.5 19.125V32.55C31.5 33.375 31.206 34.0815 30.618 34.6695C30.03 35.2575 29.324 35.551 28.5 35.55H7.5ZM15 26.55C14.575 26.55 14.2185 26.4065 13.9305 26.1195C13.6425 25.8325 13.499 25.476 13.5 25.05V21.4125C13.5 21.0125 13.575 20.631 13.725 20.268C13.875 19.905 14.0875 19.5865 14.3625 19.3125L24.2625 9.4125L30.675 15.7125L20.7375 25.65C20.4625 25.925 20.144 26.144 19.782 26.307C19.42 26.47 19.0385 26.551 18.6375 26.55H15Z" />
                </svg>
                <span class="mt-1 text-xl font-semibold">Edit Profile</span>
            </a>
        </div>
        <!-- Edit profile End -->

        <div class="mt-5">
            <div class="flex text-warna3h ml-6 mb-2">
                <!-- ini svg ya cok -->
                <svg class="fill-current h-7" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_66_409)">
                        <path
                            d="M25.9999 32H24.2599C23.8475 31.7083 23.5009 31.3333 23.2425 30.8992C22.9841 30.4651 22.8197 29.9816 22.7599 29.48V28.13H13.2399V29.5C13.1775 29.9981 13.0118 30.4777 12.7535 30.9082C12.4953 31.3386 12.15 31.7105 11.7399 32H9.93994C9.67472 32 9.42037 32.1054 9.23283 32.2929C9.0453 32.4804 8.93994 32.7348 8.93994 33C8.93994 33.2652 9.0453 33.5196 9.23283 33.7071C9.42037 33.8946 9.67472 34 9.93994 34H26.0599C26.1943 34.0123 26.3298 33.9949 26.4567 33.949C26.5836 33.9031 26.6989 33.8298 26.7943 33.7344C26.8897 33.6389 26.963 33.5237 27.0089 33.3968C27.0548 33.2699 27.0722 33.1344 27.0599 33C27.0602 32.8635 27.0325 32.7283 26.9785 32.6029C26.9245 32.4775 26.8455 32.3645 26.7462 32.2708C26.6469 32.1771 26.5294 32.1048 26.4011 32.0582C26.2727 32.0116 26.1362 31.9918 25.9999 32Z"
                                />
                        <path
                            d="M32.5 3H3.5C3.10218 3 2.72064 3.15804 2.43934 3.43934C2.15804 3.72064 2 4.10218 2 4.5V25.5C2 25.8978 2.15804 26.2794 2.43934 26.5607C2.72064 26.842 3.10218 27 3.5 27H32.5C32.8978 27 33.2794 26.842 33.5607 26.5607C33.842 26.2794 34 25.8978 34 25.5V4.5C34 4.10218 33.842 3.72064 33.5607 3.43934C33.2794 3.15804 32.8978 3 32.5 3ZM31 21.83H5V7H31V21.83Z"
                                />
                    </g>
                    <defs>
                        <clipPath id="clip0_66_409">
                            <rect width="36" height="36" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <!-- sampe sini svg nya -->
                <span class="mt-1 ml-1 text-xl font-semibold">Tampilan</span>
            </div>


            <!-- Si light & dark mode start -->
            <form class="relative flex justify-center items-center" action="">
                <select class="border-2 focus:outline-none w-[95%] h-14 bg-white rounded-xl font-semibold text-warna3h pl-2" name="" id="">
                    <option class="font-semibold" value="">Light</option>
                    <option class="font-semibold" value="">Dark</option>
                </select>
            </form>
            <!-- Si light & dark mode start -->

            <!--  -->
            @if(auth()->user()->role == 'moderator')
            <div>
                <button class="bg-warna3 hover:bg-warna3h flex px-2 py-1 drop-shadow-md ml-7 mt-5 rounded">
                    <img src="../Img/icon/moderator.svg" alt="">
                    <span class="ml-3 text-white my-auto font-semibold">Anda masuk Sebagai Moderator</span>
                </button>
            </div>
            @endif

        </div>
        <!-- Tombol simpan -->
        <a href="#">
            <div class="bg-warna2 hover:bg-warna2h w-20 flex justify-center rounded absolute bottom-3 right-3">
                <span class="text-white font-medium">Simpan</span>
            </div>
        </a>
    </div>
</div>
<!-- Content End -->


@endsection
