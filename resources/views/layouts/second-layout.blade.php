<!DOCTYPE html>
<html>
    @include('includes.head')
    <body class="flex flex-col min-h-screen">
        @include('includes.header-with-search')
        <main class="flex-grow container mx-auto p-4">@yield('content')</main>
        @include('includes.footer')
    </body>
</html>
