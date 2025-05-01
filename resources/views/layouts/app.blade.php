<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','The Matrix World')</title>
    @vite (['resources/js/app.js'])
    @vite (['resources/js/particleBackground.js'])


</head>
<body class="relative bg-color-primary overflow-x-hidden">
    <!-- Background SVG Layer -->
    <div class="fixed bottom-0 left-0 z-0 w-full h-full  opacity-2 pointer-events-none">
        <img src="{{ asset('media/matrix-bg.svg') }}"
            alt="Background SVG"
            class="w-full h-full object-contain filter invert" />
    </div>


    <!-- Main Content Layer -->
    <div class="relative z-10">
        @include('partials.navbar')

        <div class="container mx-auto p-4">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>
</body>

</html>
