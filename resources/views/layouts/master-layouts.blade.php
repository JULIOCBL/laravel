<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <header>
        @include('layouts.header')
    </header>

    <main>
        @yield('content')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>

</body>

</html>