<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Rezopay Technologies | Digital Innovation')</title>
    <meta name="description"
        content="@yield('description', 'Rezopay Technologies builds digital products, websites and business software.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="top"></div>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.contact-modal')
</body>

</html>