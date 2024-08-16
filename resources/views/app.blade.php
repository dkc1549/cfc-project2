<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>
    @include('layouts.navbar')
    @yield('main-section')
    
    @include('layouts.footer')
</body>
</html>