@php
    $RouteSaatIni = Route::currentRouteName();
@endphp

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" style="font-size: 24px;" href="{{ route('Home') }}"><i class="bi bi-dropbox"></i> Master Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item" style="margin-left: 600px;">
                    <a class="nav-link @if ($RouteSaatIni == 'Home')
                        HomeLink
                    @endif" aria-current="page" href="{{ route('Home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($RouteSaatIni == 'Barang.index')
                        BarangLink
                    @endif" href=" {{ route('Barang.index') }} ">List Barang</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
