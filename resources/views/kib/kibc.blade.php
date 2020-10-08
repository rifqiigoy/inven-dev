@extends('layout/table')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DATA KIB C - GEDUNG DAN BANGUNAN</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 90%">
          <thead class="thead-dark text-nowrap">
            <tr>
                <th></th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Alamat</th>
                <th>Luas</th>
                <th>Bulan Pengadaan</th>
                <th>Tahun Pengadaan</th>
                <th>Asal / Dokumen</th>
                <th>Umur Ekonomis</th>
                <th>Nama OPD</th>
                <th>Nama Sub-OPD</th>
                <th>Kab/Kota</th>
                <th>Keterangan</th>
          </tr>
          </thead>
          <tbody>
            @foreach( $kibc as $inv_c )
            <tr>
                  <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                  <td>{{ $inv_c->kode }}</td>
                  <td>{{ $inv_c->nama }}</td>
                  <td>{{ $inv_c->alamat }}</td>
                  <td>{{ $inv_c->luas }}</td>
                  <td>{{ $inv_c->bulan }}</td>
                  <td>{{ $inv_c->tahun }}</td>
                  <td>{{ $inv_c->asal }}</td>
                  <td>{{ $inv_c->umur }}</td>
                  <td>{{ $inv_c->opd }}</td>
                  <td>{{ $inv_c->sub_opd }}</td>
                  <td>{{ $inv_c->kota }}</td>
                    <td>{{ $inv_c->keterangan }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
