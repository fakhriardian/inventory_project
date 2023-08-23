<aside id="logo-sidebar" class="fixed top-20 z-50 w-64 h-screen bg-gray-100 backdrop-blur-xl transition-transform -translate-x-full drop-shadow-2xl lg:rounded-3xl rounded-r-2xl lg:translate-x-5 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 py-4">
        <ul data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="true" 
            class="h-full px-3 py-4 overflow-y-auto space-y-3 font-medium">
            @if (Auth()->User()->role === 'superAdmin')
                @include('includes.sidebar.sidebar_super_admin')
            @elseif (Auth()->User()->role === 'admin')
                @include('includes.sidebar.sidebar_admin')
            @elseif (Auth()->User()->role === 'konsumen')
                @include('includes.sidebar.sidebar_consumer')
            @endif
        </ul>
    </div>
</aside>