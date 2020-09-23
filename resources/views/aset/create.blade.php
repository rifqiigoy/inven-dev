@extends('layout/table')

@section('content')
<div class="card shadow mb-4 mx-auto border-bottom-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="/aset">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control" id="kode" name="kode">
            </div>
            <div class="form-group">
                <label for="register">Nomor Registrasi Barang</label>
                <input type="text" class="form-control" id="register" name="register">
            </div>
            <div class="form-group">
                <label for="kib">Jenis KIB</label>
                <select class="custom-select" id="kib" name="kib">
                    <option selected>-- Pilih KIB --</option>
                    <option value="KIB B">KIB B</option>
                    <option value="KIB E">KIB E</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi Barang</label>
                <select class="custom-select" id="lokasi" name="lokasi">
                    <option selected>-- Pilih Lokasi --</option>
                    @foreach ($ruangan as $ruang)
                    <option value="{{ $ruang->lokasi }}">{{ $ruang->lokasi }} / {{ $ruang->nama_lokasi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="merk">Merek Barang</label>
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Pengadaan Barang</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="number" maxlength="4" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
                <label for="harga">Harga Satuan Barang</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                <input type="number" class="form-control" id="harga" name="harga">
                </div>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai Tercatat Barang</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                <input type="number" class="form-control" id="nilai" name="nilai">
                </div>
            </div>
            <div class="form-group">
                <label for="akumulasi">Akumulasi Penyusutan Barang</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                <input type="number" class="form-control" id="akumulasi" name="akumulasi">
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <select class="custom-select" id="keterangan" name="keterangan">
                    <option selected>-- Keterangan --</option>
                    <option value="BAIK">BAIK</option>
                    <option value="RUSAK BERAT">RUSAK BERAT</option>
                    <option value="RUSAK RINGAN">RUSAK RINGAN</option>
                    <option value="BARANG TIDAK ADA">BARANG TIDAK ADA</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-1">Tambah Data</button>
        </form>
    </div>
</div>
@endsection
