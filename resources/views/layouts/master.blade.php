<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>

<body>
    <!-- Header -->
    <header>

        @include('includes.header')

    </header>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer>

        @include('includes.footer')

    </footer>

    <!-- Scripts -->
    @yield('javascript')
</body>
</html>
