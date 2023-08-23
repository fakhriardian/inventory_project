@extends('layouts.master')

@section('title')
@section('content')
<div class="p-4 lg:ml-64 w-full -translate-y-10">
    <div data-aos="fade-in" data-aos-delay="800" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
        <div class="p-4 bg-white/80 rounded-2xl dark:border-gray-700 mt-14 shadow-xl">
            <div class="flex flex-col items-center justify-center mb-4 rounded-2xl backdrop-blur-lg dark:bg-gray-800">
                <div class="w-full p-5 inline-flex items-center justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-bold">
                            Daftar Konsumen
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
                                <th scope="col" class="px-3 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Opsi
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
                                    <td class="px-3 py-4">
                                        konsumen{{ $i }}@gmail.com
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="inline-flex md:gap-10 gap-4">
                                            <a href="/">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                                                </svg>
                                            </a>
                                            <a href="/">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                                </svg>
                                            </a>
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