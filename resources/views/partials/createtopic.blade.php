<!-- Buatlah sebuah Topik, Start -->
<label for="my-modal-3" class="w-1/2 md:w-3/4 my-auto h-full ml-1 lg:ml-16">
    <div class="">
        <div class="px-1 mx-2 my-auto rounded-lg bg-white flex">
            <div class="cursor-pointer w-[100%] h-8 bg-bgc shadow-inner rounded pt-[0.20rem]"> <span class="ml-1 opacity-75 text-xs text-tgc ">Buatlah Sebuah Topik....</span> </div>
        </div>
    </div>
</label>
<!-- Buatlah sebuah Topik, End -->
{{-- $source_pp = ($foto_profil != 0) ? "profile/" . $foto_profil:"icon/Profile.svg"; --}}

<!-- Ini pop up "Buatlah sebuah Topik", Start -->
    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
    <label for="my-modal-3" class="modal">
        <div class="w-[70%] relative">
            <div class="relative bg-white pt-8 rounded-md">
                <div class="flex ml-4 pb-5">
                    <div class="bg-bgc aspect-square h-10 overflow-hidden rounded-full">
                        <img class="h-full w-full object-cover" src="img/User.svg{{-- $source_pp --}}" alt="">
                    </div>
                    <span class="font-medium ml-2 text-lg text-gray-800">{{ auth()->user()->fullname }}</span>
                </div>

                <label for="my-modal-3">
                    <img class="absolute h-5 top-2 right-2" src="img/icon/close.svg" alt="">
                </label>

                <hr>

                {{-- form question.store --}}
                <form action="{{ url('/questions/') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- untuk sementara user id = 2 --}}
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="flex justify-center items-center mt-2">
                    <textarea class="bg-white mx-auto w-[95%] border-none focus:outline-none resize-none text-gray-800" name="content"
                        id="" rows="10" placeholder="Buatlah sebuah pertanyaan...."></textarea>
                </div>
                <hr>
                <div class="flex justify-end">

                    <label for="input-gambar">
                        <img class="h-8 mr-2 my-2" src="img/icon/round-image.svg" alt="">
                    </label>
                    <input id="input-gambar" name="image" accept="image/*" type="file" class="hidden">

                    <button type="submit" name="submit"> <img class="h-6 mr-4 my-2" src="img/icon/share.svg" alt=""> </button>
                </div>
                </form>
                {{-- form question.store End --}}

            </div>
        </div>
    </label>
<!-- Ini pop up "Buatlah sebuah Topik", End -->
