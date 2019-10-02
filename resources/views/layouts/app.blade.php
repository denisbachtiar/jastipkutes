<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
    @include('layouts.navbar')
    
    @yield('content')   
    @include('layouts.footer')
    @include('layouts.modals')
    @include('layouts.scripts')
</body>
</html>