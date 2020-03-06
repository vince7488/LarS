<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.header-html')
    <body>
        @include('partials.header')
        @yield('MainContainer')
        @include('partials.footer')
	    @include('partials.footer-script')
    </body>
</html>
