<!DOCTYPE html>
<html lang="en">
    @include('theme.head')
    <body>
        @include('theme.navbar')

            @yield('content')
            
        @include('theme.js')
    </body>
</html>