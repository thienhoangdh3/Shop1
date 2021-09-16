<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body>
        <!-- Navigation-->
        @include('layouts.navigation')

        <div class="master">
            @yield('content')
        </div>
        
        <!-- Footer-->
        @include('layouts.footer')
        <!-- Bootstrap core JS-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
        <!-- Core theme JS-->
        {{-- <script src="js/scripts.js"></script> --}}
    </body>
</html>
