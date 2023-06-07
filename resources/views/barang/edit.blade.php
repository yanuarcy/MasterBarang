@extends('Layouts.basedApp')

@section('Konten')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card" style="width: 60%; z-index: 1;">
                <div class="card-head">
                    <div class="text-center">
                        <h1 class="mt-4"><i class="bi bi-archive-fill"></i></h1>
                        <h4 class="mt-3">{{ $Tittle }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('Barang.update', $barang->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="Kode_Barang" class="form-label">Kode Barang</label>
                                <input class="form-control @error('Kode_Barang') is-invalid @enderror" type="text" name="Kode_Barang" id="Kode_Barang" value="{{ $barang->kode_barang }}" placeholder="Masukkan Kode Barang">
                                    @error('Kode_Barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Nama_Barang" class="form-label">Nama Barang</label>
                                <input class="form-control @error('Nama_Barang') is-invalid @enderror" type="text" name="Nama_Barang" id="Nama_Barang" value="{{ $barang->nm_barang }}" placeholder="Masukkan Nama Barang">
                                    @error('Nama_Barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Harga_Barang" class="form-label">Harga Barang</label>
                                <input class="form-control @error('Harga_Barang') is-invalid @enderror" type="text" name="Harga_Barang" id="Harga_Barang" value="{{ $barang->hg_barang }}" placeholder="Masukkan Harga Barang">
                                    @error('Harga_Barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Deskripsi_Barang" class="form-label">Deskripsi Barang</label>
                                <input class="form-control @error('Deskripsi_Barang') is-invalid @enderror" type="text" name="Deskripsi_Barang" id="Deskripsi_Barang" value="{{ $barang->desc_barang }}" placeholder="Masukkan Deskripsi Barang">
                                    @error('Deskripsi_Barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="Nama_Satuan" class="form-label">Nama Satuan</label>
                                <select name="Nama_Satuan" id="Nama_Satuan" class="form-select">
                                    @foreach ($satuan as $satuans)
                                        <option value="{{ $satuans->id }}" {{ $barang->satuan->nm_satuan == $satuans->nm_satuan ? 'selected' : '' }}>{{ $satuans->kode_satuan.' - '.$satuans->nm_satuan }}</option>
                                    @endforeach
                                </select>
                                @error('Nama_Satuan')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('Barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


