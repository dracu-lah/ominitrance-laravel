<!DOCTYPE html>
<html>
    @include('includes.head')
    <body class="flex flex-col min-h-screen">
        <main class="flex-grow ">@yield('content')</main>
        @include('includes.footer')
    </body>
</html>
