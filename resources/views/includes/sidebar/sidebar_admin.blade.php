<li>
    <a href="/" class="flex items-center p-2 rounded-2xl hover:text-blue-600 hover:bg-white/80 hover:drop-shadow-lg hover:scale-105 dark:hover:bg-gray-700 duration-300 transition-all delay-75 group {{ Request::is('/') ? 'text-blue-600 drop-shadow-lg bg-white/80':''}}">
        <svg class="w-5 h-5 transition duration-75 dark:text-gray-400dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
        </svg>
        <span class="ml-3">Dashboard</span>
    </a>
</li>
<li>
    <a href="/daftar-marketing" class="flex items-center p-2 rounded-2xl hover:text-blue-600 hover:bg-white/80 hover:drop-shadow-lg hover:scale-105 dark:hover:bg-gray-700 duration-300 transition-all delay-75 group {{ Request::is('daftar-marketing') ? 'text-blue-600 drop-shadow-lg bg-white/80':''}}">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"/>
        </svg>
        <span class="ml-3">Daftar Marketing</span>
    </a>
</li>
<li>
    <a href="/daftar-konsumen" class="flex items-center p-2 rounded-2xl hover:text-blue-600 hover:bg-white/80 hover:drop-shadow-lg hover:scale-105 dark:hover:bg-gray-700 duration-300 transition-all delay-75 group {{ Request::is('daftar-konsumen') ? 'text-blue-600 drop-shadow-lg bg-white/80':''}}">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
        </svg>
        <span class="ml-3">Daftar Konsumen</span>
    </a>
</li>
<li>
    <a href="/daftar-penjualan" class="flex items-center p-2 rounded-2xl hover:text-blue-600 hover:bg-white/80 hover:drop-shadow-lg hover:scale-105 dark:hover:bg-gray-700 duration-300 transition-all delay-75 group {{ Request::is('daftar-penjualan') ? 'text-blue-600 drop-shadow-lg bg-white/80':''}}">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z"/>
        </svg>
        <span class="ml-3">Daftar Penjualan</span>
    </a>
</li>