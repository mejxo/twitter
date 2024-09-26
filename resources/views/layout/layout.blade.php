<!DOCTYPE html>
<html lang="EN">

<head>
    {{-- Inluce head --}}
    @include('layout.head')
</head>

<body>
    {{-- Inluce nav --}}
    @include('layout.nav')
    <div class="container py-4">
        {{-- Here is spawning view content --}}
        @yield('content')
    </div>
    @include('layout.footer')
</body>

</html>
