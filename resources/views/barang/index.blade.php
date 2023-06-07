@php
    $RouteSaatIni = Route::currentRouteName();
@endphp

@extends('Layouts.basedApp')

@section('Konten')
    <section class="home" id="section-home">
        <div class="@if ($RouteSaatIni == 'Barang.index')
            Jumbotron
        @endif jumbotron-fluid">
            <div class="container text-center">
                <div class="komponen">
                    <h2 class="display-4">Get work done <span>faster</span><br> and <span>bettter</span> with us</h2>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row my-5">
            <hr>
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $Tittle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('Barang.create') }}" class="btn btn-primary mb-3">Input Barang</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="row my-5">
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Nama Satuan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $Barang as $barang)
                            <tr>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nm_barang }}</td>
                                <td>{{ $barang->hg_barang }}</td>
                                <td>{{ $barang->desc_barang }}</td>
                                <td>{{ $barang->satuan->nm_satuan }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('Barang.show', ['Barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                        <a href="{{ route('Barang.edit', ['Barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                        <div>
                                            <form action="{{ route('Barang.destroy', ['Barang' => $barang->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
