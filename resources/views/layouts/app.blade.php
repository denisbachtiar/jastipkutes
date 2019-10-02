<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
    @include('layouts.navbar')
    <div style="margin-top: 80px;">
    @yield('content') 

    @include('layouts.footer')
    @include('layouts.modals')
</div>  
    @include('layouts.scripts')
</body>
</html>