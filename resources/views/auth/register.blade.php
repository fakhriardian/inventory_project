@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="space-y-3">
            <p class="uppercase">join with us</p>
            <h1 class="md:text-4xl text-3xl text-gray-800 font-bold capitalize">create new account<span class="md:text-5xl text-4xl text-blue-500">.</span></h1>
            <h5 class="text capitalize md:text-lg text-xs">already a member? <span><a href="/login" class="capitalize text-blue-500">log in</a></span></h5>
        </div>
        <div class="space-y-4 mt-6">
            <div class="md:w-96 w-full grid grid-cols-2 gap-5 transition-all duration-300">
                <div class="relative">
                    <input type="text" id="input-first-name" name="firstName" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                    <label for="input-first-name" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">First Name</label>
                </div>
                <div class="relative">
                    <input type="text" id="input-last-name" name="lastName" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                    <label for="input-last-name" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Last Name</label>
                </div>
            </div>
            <div class="relative">
                <input type="email" id="input-email" name="email" class="block px-2.5 pb-2.5 pt-4 md:w-96 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                <label for="input-email" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
            </div>
            <div class="relative">
                <input type="password" id="input-password" name="password" class="block px-2.5 pb-2.5 pt-4 md:w-96 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                <label for="input-password" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
            </div>
            <div class="relative">
                <input type="password" id="input-confirmPassword" name="password" class="block px-2.5 pb-2.5 pt-4 md:w-96 w-full text-sm text-gray-900 bg-transparent rounded-2xl bg-white border-2 border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer shadow-lg transition-all duration-300" placeholder=" " />
                <label for="input-confirmPassword" class="absolute text-sm text-gray-500 rounded-full dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Confirm Password</label>
            </div>
        </div>
        <button type="submit" class="md:w-96 w-full mt-10 text-gray-200 bg-blue-500 p-2 rounded-2xl hover:bg-blue-600 hover:text-white transition-all duration-300 delay-75 hover:scale-105">Register</button>
    </form>
@endsection