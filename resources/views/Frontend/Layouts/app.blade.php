<!DOCTYPE html>
<html lang="en">

<head>
    @include('Frontend.Includes.header')
    @yield('css')
</head>

<body class="{{ $themeColor ?? '' }}">
    <!-- Main Contenet -->
    @yield('content')

    <!-- start loader -->
    @include('Frontend.Includes.footer')
    @yield('script')

   

</body>

</html>
