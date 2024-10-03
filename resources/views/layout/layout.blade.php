<!DOCTYPE html>
<html lang="EN">

<head>
    {{-- Inluce head --}}
    @include('inc.head')
</head>

<body>
    {{-- Inluce nav --}}
    @include('inc.nav')
    <div class="container py-4">
        {{-- Here is spawning view content --}}
        @yield('content')
    </div>
    @include('inc.footer')
</body>

</html>
