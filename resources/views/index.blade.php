<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"content="">
    <title>
        {{ config('app.name', 'Inventory-Laravel') }}
    </title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @viteReactRefresh
    @vite('resources/js/app.js')

</head>

<body>
    <div id="appx">

    </div>

</body>

</html>
