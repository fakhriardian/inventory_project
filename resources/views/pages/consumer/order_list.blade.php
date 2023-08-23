@extends('layouts.master')

@section('title')
@section('content')
<div class="md:p-4 p-0 lg:ml-64 w-full -translate-y-10">
    <div data-aos="fade-in" data-aos-delay="800" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
        <div class="md:p-4 p-0 md:bg-white/80 bg-white rounded-2xl dark:border-gray-700 mt-14 shadow-xl">
            <div class="flex flex-col items-center justify-center mb-4 rounded-2xl backdrop-blur-lg dark:bg-gray-800">
                <div class="w-full p-5 inline-flex items-center justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-bold">
                            List Pemesanan
                        </h1>
                        <div class="inline-flex">
                            <h1 class="text-xl">Total :<span class="font-bold"> 6</span></h1>
                        </div>
                    </div>
                    <form class="sm:w-72 w-full">
                        <div class="relative w-full inline-flex items-center">
                            <input type="search" id="default-search" class="block w-full p-2 pl-5  text-sm text-gray-900 rounded-full border-white bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full relative overflow-x-auto rounded-2xl hover:drop-shadow-lg hover:-translate-y-0.5 duration-300 transition-all">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-1 py-3 text-center">
                                    No
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-3 py-3 md:flex hidden">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i < 6; $i++)      
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="px-1 py-4 text-center">
                                        {{ $i }}
                                    </td>
                                    <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        konsumen{{ $i }}
                                    </th>
                                    <td class="px-3 py-4 md:flex hidden">
                                        konsumen{{ $i }}@gmail.com
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="inline-flex items-center gap-5">
                                            <a href="/">
                                                <div class="px-3 py-2 w-fit bg-blue-500 text-white rounded-full">
                                                    Detail
                                                </div>
                                            </a>
                                            <div class="px-3 py-2 w-fit bg-green-500 text-white rounded-full">
                                                Accepted
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection