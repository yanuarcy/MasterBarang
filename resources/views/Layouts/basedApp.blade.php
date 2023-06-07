@php
    $RouteSaatIni = Route::currentRouteName();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $Tittle }}</title>
    @vite('resources/css/app.css')
    @vite('resources/sass/app.scss')
</head>
<body class="@if ($RouteSaatIni == 'Barang.create')
    Body @elseif ($RouteSaatIni == 'Barang.edit')
    Body @elseif ($RouteSaatIni == 'Barang.show')
    Body
@endif">

    @include('Layouts.navbar')
    @yield('Konten')

    @vite('resources/js/app.js')
</body>
</html>
