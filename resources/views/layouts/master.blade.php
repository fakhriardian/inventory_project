<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.components.meta')
    <title>@yield('title')</title>
    @include('includes.components.style')
</head>
{{-- <body class="lg:px-5 px-1 bg-no-repeat w-full h-full" style="background-image: url(assets/background3.jpeg)"> --}}
<body class="lg:px-5 px-1 w-full h-full bg-gray-900">
    @include('includes.components.navbar')
    <div class="inline-flex w-full">
        @include('includes.components.side')
        @yield('content')
    </div>
    @if (Auth()->User()->role === 'konsumen') 
        @include('includes.components.bottomnav')
    @else
    @endif
</body>
</html>