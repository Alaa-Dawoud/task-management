<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title', config('app.name'))</title>
    <!-- CSS files -->
    @vite(['resources/css/admin.css'])
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    @stack('styles')
</head>

<body>
    @stack('modals')
    <div class="page">
        <!-- Navbar -->
        <div class="sticky-top">
            @include('admin.partials.header')
            @include('admin.partials.navbar')
        </div>
        <div class="page-wrapper">
            @yield('content')
            @include('admin.partials.footer')
        </div>
    </div>
    <!-- Tabler Core -->
    
    @vite(['resources/js/admin.js'])

    @stack('scripts')
    <script type="text/javascript">
        window.addEventListener('alert', event => {
            //
        });
    </script>
</body>

</html>
