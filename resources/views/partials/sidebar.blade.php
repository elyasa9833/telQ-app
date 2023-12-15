    {{-- <!-- Ini versi HP Start -->
    <div class="md:hidden">
        <nav class="w-full md:w-0 z-20 ">
            <div class="">
                <aside class=" bg-white w-full flex justify-between">
                    <!-- logo telq! -->
                    <a href=""> <img class="rounded-br" src="../Img/Logo.svg" alt=""> </a>
                </aside>
            </div>
        </nav>
    </div>
    <!-- Ini versi HP End --> --}}

    <!-- Ini sidebar pc & tab Start -->
    <div class="hidden md:block col-span-1 md:row-span-2">
        <!-- Side bar Left start-->
        <div class="h-full bg-white">
            <img class="w-full " src="../Img/Logo.svg" alt="">

            @if(auth()->user()->role != 'admin')
            <!-- Pilihan Home Start -->
            <a href="/">
                <div class="mx-4 py-2 rounded flex text-white mt-5 shadow-md {{ Request::is('/') ? 'bg-warna2 hover:bg-warna2h':'bg-warna3 hover:bg-warna3h' }}">
                    <svg class="fill-current h-5 pl-4 mt-[2px]" viewBox="0 0 20 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 22.5V7.5L10 0L20 7.5V22.5H12.5V13.75H7.5V22.5H0Z" />
                    </svg>
                    <span class="text-lg text-center ml-5 font-semibold">Home</span>
                </div>
            </a>
            <!-- Pilihan Home End -->

            <!-- Pilihan Komen Start -->
            <a href="/question-list">
                <div class=" mx-4 py-2 rounded flex text-white mt-5 shadow-md {{ Request::is('question-list') ? 'bg-warna2 hover:bg-warna2h':'bg-warna3 hover:bg-warna3h' }}">
                    <svg class="fill-current h-[22px] pl-4 mt-1" viewBox="0 0 28 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 22.5V19.3125L21.45 11.3625L24.6375 14.55L16.6875 22.5H13.5ZM0 15V12H10.5V15H0ZM25.6875 13.5L22.5 10.3125L23.5875 9.225C23.8625 8.95 24.2125 8.8125 24.6375 8.8125C25.0625 8.8125 25.4125 8.95 25.6875 9.225L26.775 10.3125C27.05 10.5875 27.1875 10.9375 27.1875 11.3625C27.1875 11.7875 27.05 12.1375 26.775 12.4125L25.6875 13.5ZM0 9V6H16.5V9H0ZM0 3V0H16.5V3H0Z" />
                    </svg>

                    <span class="text-lg text-center ml-3 font-semibold">Question List</span>
                </div>
            </a>
            <!-- Pilihan Komen End -->

            @elseif(auth()->user()->role == 'admin')
            <!-- Pilihan view user start -->
            </a>
            <a href="/dashboard/view-user">
            <div class=" mx-4 py-[0.30rem] rounded flex text-white mt-5 shadow-md  {{ Request::is('dashboard/view-user') ? 'bg-warna2 hover:bg-warna2h':'bg-warna3 hover:bg-warna3h' }}">
                <svg class="fill-current h-[22px] pl-4 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3a3 3 0 1 1-1.614 5.53M15 12a4 4 0 0 1 4 4v1h-3.348M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0ZM5 11h3a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                </svg>

                <span class="text-lg text-center ml-4 font-semibold">View User</span>
            </div>
            </a>
            <!-- Pilihan view user end -->
            @endif

            <!-- Pilihan Setting Start -->
            <a href="/setting">
                <div class=" mx-4 py-2 rounded flex text-white mt-5 shadow-md {{ Request::is('setting') ? 'bg-warna2 hover:bg-warna2h':'bg-warna3 hover:bg-warna3h' }}">
                    <svg class="fill-current h-5 pl-[13px] mt-1" viewBox="0 0 23 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.7397 1.89162e-06C13.0778 1.89162e-06 13.3802 0.189668 13.4941 0.473648L14.3059 2.50193C14.5969 2.56723 14.8464 2.63252 15.058 2.70093C15.2891 2.77555 15.587 2.88852 15.955 3.04295L17.8455 2.14126C17.9998 2.06757 18.1765 2.04098 18.349 2.06546C18.5215 2.08994 18.6805 2.16417 18.8023 2.27703L20.4651 3.82648C20.6859 4.03273 20.748 4.33433 20.6238 4.59758L19.7372 6.4704C19.8844 6.71396 20.0017 6.92228 20.0914 7.0964C20.188 7.28607 20.3076 7.54725 20.4502 7.88409L22.5166 8.68213C22.8271 8.80132 23.0192 9.08116 22.9985 9.38068L22.8467 11.5313C22.8363 11.671 22.7806 11.8049 22.6866 11.9163C22.5926 12.0278 22.4643 12.1119 22.3177 12.1583L20.3605 12.7853C20.3041 13.0289 20.2455 13.2372 20.1834 13.4134C20.0832 13.6855 19.9689 13.9532 19.8407 14.2156L20.8239 16.1745C20.8933 16.3121 20.912 16.4661 20.8772 16.614C20.8425 16.7619 20.7561 16.8959 20.6307 16.9963L18.7609 18.5012C18.6377 18.5999 18.4841 18.6623 18.3205 18.6801C18.1569 18.6979 17.9911 18.6702 17.8455 18.6007L15.9182 17.6804C15.6166 17.8243 15.3056 17.9513 14.9867 18.0607L14.1449 18.3447L13.3975 20.2103C13.3421 20.3469 13.2422 20.4652 13.1108 20.5498C12.9795 20.6343 12.8228 20.6811 12.6615 20.6839L10.4766 20.7285C10.3109 20.7324 10.148 20.69 10.0102 20.607C9.87247 20.524 9.76661 20.4046 9.70724 20.2652L8.82637 18.1644C8.52582 18.0718 8.22825 17.9716 7.934 17.8638C7.69333 17.7699 7.4563 17.6687 7.22332 17.5602L5.0384 18.4017C4.89443 18.4571 4.73571 18.4735 4.58157 18.4491C4.42742 18.4246 4.28449 18.3602 4.17018 18.2639L2.55333 16.8968C2.43296 16.7955 2.35098 16.6626 2.31899 16.517C2.287 16.3714 2.30663 16.2203 2.37509 16.0853L3.31461 14.2405C3.18966 14.022 3.07381 13.7993 2.96732 13.573C2.84301 13.296 2.72796 13.0157 2.62233 12.7325L0.563903 12.1676C0.396585 12.1221 0.250647 12.028 0.148756 11.9C0.0468639 11.7719 -0.00527981 11.6172 0.000422575 11.4598L0.0809198 9.46878C0.0866496 9.33888 0.131675 9.21286 0.211127 9.10435C0.29058 8.99584 0.401435 8.90897 0.531704 8.85314L2.69133 7.91829C2.79138 7.58767 2.87877 7.33064 2.95582 7.14304C3.06431 6.89248 3.18478 6.64627 3.31691 6.40511L2.38084 4.62246C2.3098 4.48708 2.28823 4.33489 2.31923 4.18777C2.35022 4.04064 2.43219 3.90617 2.55333 3.80368L4.16788 2.42938C4.28106 2.33317 4.42268 2.26849 4.57569 2.24312C4.7287 2.21774 4.88658 2.23276 5.03035 2.28636L7.21297 3.09891C7.45447 2.95381 7.67296 2.8367 7.87075 2.74238C8.10649 2.62941 8.42158 2.51126 8.81832 2.38378L9.57729 0.475721C9.6334 0.336082 9.73597 0.215455 9.87098 0.130313C10.006 0.0451702 10.1669 -0.000338134 10.3317 1.89162e-06H12.7397ZM11.5276 7.27467C9.61064 7.27467 8.05704 8.6583 8.05704 10.3663C8.05704 12.0744 9.61064 13.459 11.5276 13.459C13.4435 13.459 14.9971 12.0744 14.9971 10.3663C14.9971 8.6583 13.4446 7.27467 11.5276 7.27467Z" />
                    </svg>

                    <span class="text-lg text-center ml-5 font-semibold">Settings</span>
                </div>
            </a>
            <!-- Pilihan Setting End -->

            @if(auth()->user()->role == 'moderator')
            <!-- Pilihan Reporting Start -->
            <a href="/mod/report">
            <div class=" mx-4 py-[0.30rem] rounded flex text-white mt-5 shadow-md  {{ Request::is('mod/report') ? 'bg-warna2 hover:bg-warna2h':'bg-warna3 hover:bg-warna3h' }}">
                <svg class="fill-current h-8 pl-[10px] " viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.595 4.5H12.405L4.5 12.405V23.595L12.405 31.5H23.595L31.5 23.595V12.405L23.595 4.5ZM28.5 22.35L22.35 28.5H13.65L7.5 22.35V13.65L13.65 7.5H22.35L28.5 13.65V22.35Z"
                        fill="#FFFFFF" />
                    <path
                        d="M18 25.5C18.8284 25.5 19.5 24.8284 19.5 24C19.5 23.1716 18.8284 22.5 18 22.5C17.1716 22.5 16.5 23.1716 16.5 24C16.5 24.8284 17.1716 25.5 18 25.5Z"
                        fill="#FFFFFF" />
                    <path d="M16.5 10.5H19.5V21H16.5V10.5Z" fill="#FFFFFF" />
                </svg>

                <span class="text-lg text-center ml-4 font-semibold">Reporting</span>
            </div>
            </a>
            <!-- Pilihan Reporting End -->
            @endif

        </div>
        <!-- Side bar Left End-->
    </div>
    <!-- Ini sidebar pc & tab End -->
