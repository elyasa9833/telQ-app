@extends('layouts.main')
@section('container')
<div class="h-[89vh] md:h-[93vh] overflow-auto shadow">
  <div class="bg-white relative">

    <!-- Title Start -->
    <div class="text-warna3h ml-5 mr-5 pt-10 mb-10 border-b-2">
        <span class="mt-1 text-xl font-bold">Manage User</span>
    </div>
    <!-- Title End -->
        
    <!-- table user start -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 font-semibold">
                <tr>
                    <th scope="col" class="px-6 py-3">Fullname</th>
                    <th scope="col" class="px-6 py-3">username</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Kota</th>
                    <th scope="col" class="px-6 py-3">Nomor Telepon</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- loop start --}}
                @foreach ($users as $user)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $user->fullname }}</th>
                    <td class="px-6 py-4">{{ '@'. $user->username }}</td>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">{{ $user->asal_kota }}</td>
                    <td class="px-6 py-4">{{ $user->phone_number }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ url('/user/'. $user->username .'/edit') }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                        <form action="{{ url('/user/'. $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="font-medium text-red-600 hover:underline" onclick="return confirm('Anda yakin ingin menghapus {{$user->fullname}}?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                {{-- loop end --}}
                
            </tbody>
        </table>
    </div>
    <!-- table user end -->

  </div>
</div>
@endsection