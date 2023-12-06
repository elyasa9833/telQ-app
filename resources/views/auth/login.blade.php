@extends('layouts.mainAuth')
@section('authContainer')

@if (session()->has('success'))
    @include('partials.alertSuccess')
@endif

@if (session()->has('loginErr'))
    @include('partials.alertLoginErr')
@endif

<div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl ">
            Sign in to your account
        </h1>

        <form class="space-y-4 md:space-y-6" action="/login" method="POST">
            @csrf
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border @error('email') border-red-500 text-red-900 @else border-gray-300 text-gray-900 @enderror sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 " placeholder="name@mail.com" required>
                @error('email')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border @error('password') border-red-500 text-red-900 @else border-gray-300 text-gray-900 @enderror sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5 " required>
                @error('password')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Sign in</button>
            <p class="text-sm font-light text-gray-500 ">
                Don't have an account yet? <a href="/register" class="font-medium text-indigo-600 hover:underline dark:text-indigo-500">Register Now!</a>
            </p>
        </form>
    </div>
</div>
@endsection