@extends('layouts.app')
@section('title')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="md:w-1/2 w-full space-y-3">
            <p class="uppercase">Hey there!</p>
            <h1 class="md:text-4xl text-3xl text-gray-800 font-bold capitalize">welcome back<span class="md:text-5xl text-4xl text-blue-500">.</span></h1>
            <h5 class="text capitalize md:text-lg text-xs whitespace-pre-line">hey enter your details to get sign in!</h5>
        </div>
        <div class="space-y-4 mt-6">
            <div class="relative">
                <input type="email" id="input-email" name="email" class="block px-2.5 pb-2.5 pt-4 md:w-96 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                <label for="input-email" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
            </div>
            <div class="relative">
                <input type="password" id="input-password" name="password" class="block px-2.5 pb-2.5 pt-4 md:w-96 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                <label for="input-password" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
            </div>
        </div>
        <p class="text md:text-md text-xs whitespace-pre-line py-5">Belum memiliki akun? <span><a href="/register" class="text-blue-600">daftar disini.</a></span></p>
        <button type="submit" class="md:w-96 w-full text-gray-200 bg-blue-500 p-2 rounded-2xl hover:bg-blue-600 hover:text-white transition-all duration-300 delay-75 hover:scale-105">Login</button>
    </form>
@endsection