@extends('layouts.master')

@section('title')
@section('content')
<div class="p-4 lg:ml-64 w-full -translate-y-10">
    <div data-aos="fade-in" data-aos-delay="800" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
        <div class="p-4 bg-white/80 rounded-2xl dark:border-gray-700 mt-14 shadow-xl">
            <div class="flex flex-wrap gap-5 w-full justify-between p-5 bg-white/80 backdrop-blur-lg rounded-2xl mb-2 dark:bg-gray-800 hover:drop-shadow-lg hover:-translate-y-0.5 duration-300 transition-all">
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
                <ul class="flex flex-row justify-between items-center text-sm font-medium text-center bg-white w-fit h-fit rounded-full" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li role="presentation">
                        <button class="inline-block py-2 px-3 w-24 rounded-full transition-all duration-300 text-black aria-selected:text-white aria-selected:bg-blue-600/80" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">List</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block py-2 px-3 w-24 rounded-full transition-all duration-300 text-black aria-selected:text-white aria-selected:bg-blue-600/80" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Create</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent" class="flex items-center justify-center mb-4 rounded-2xl backdrop-blur-lg dark:bg-gray-800">
                <div class="w-full hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="w-full p-5 inline-flex items-center justify-between">
                        <div class="flex flex-col">
                            <h1 class="text-2xl font-bold">
                                Daftar Toko
                            </h1>
                        </div>
                        <div class="inline-flex">
                            <h1 class="text-2xl">Total :<span class="font-bold"> 6</span></h1>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto rounded-2xl hover:drop-shadow-lg hover:-translate-y-0.5 duration-300 transition-all">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-1 py-3 text-center">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Nama Toko
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Alamat
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
                                            Toko 1
                                        </th>
                                        <td class="px-3 py-4">
                                            jl gatot subroto semarang
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
                <div class="hidden w-full p-4 rounded-lg bg-white dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <h1 class="text-2xl mb-6">Tambah Toko</h1>
                    <form>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Toko</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection