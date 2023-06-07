@extends('Layouts.basedApp')

@section('Konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-5" style="width: 40%; z-index: 1;">
                <div class="card-head">
                    <div class="text-center">
                        <h1 class="mt-4"><i class="bi bi-archive-fill"></i></h1>
                        <h4 class="mt-3">{{ $Tittle }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="Kode_Barang" class="form-label">Kode Barang</label>
                            <h5>{{ $Barang->kode_barang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Nama_Barang" class="form-label">Nama Barang</label>
                            <h5>{{ $Barang->nm_barang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Harga_Barang" class="form-label">Harga Barang</label>
                            <h5>{{ $Barang->hg_barang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Deskripsi_Barang" class="form-label">Deskripsi Barang</label>
                            <h5>{{ $Barang->desc_barang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Nama_Satuan" class="form-label">Nama Satuan</label>
                            <h5>{{ $Barang->satuan->nm_satuan }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('Barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


