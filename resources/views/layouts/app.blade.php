<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.components.meta')
    <title>@yield('title')</title>
    @include('includes.components.style')
</head>
<body class="relative w-screen h-screen overflow-hidden">
    <div class="bg-cover absolute block w-full h-full" style="background-image: url(assets/background.png)"></div>
    <div data-aos="fade-right"
        data-aos-delay="200"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-mirror="true"
        data-aos-once="true"
        class="absolute bg-gradient-to-r from-white via-gray-50 to-gray/50 backdrop-blur-sm w-full h-full">
        {{-- <a href="/" class="absolute md:px-10 px-5 py-6 font-bold text-2xl hover:text-blue-500 transition-colors duration-300 delay-100">Inventory</a> --}}
        <div data-aos="fade-up"
            data-aos-delay="950"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="true"
            class="container md:px-20 px-5 flex flex-col justify-center h-screen mx-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>