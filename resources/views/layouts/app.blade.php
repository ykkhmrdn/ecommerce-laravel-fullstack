<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<script>
    $(function() {
        AOS.init();
    });
</script>
<body>
    <div id='app'>
        @include('partials.nav')
        <div class="" style="margin-top: {{ Request::is('/') ? '-1.3em' : '2em' }}">
            @include('partials.session')
            @include('partials.errors')
            @yield('content')
        </div>
        <div style="margin-top: 10em;">
       @include('partials.footer')
        </div>
 
    </div>
</body>
@yield('scripts')
</html>
