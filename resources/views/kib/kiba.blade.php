@extends('layout/table')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DATA KIB A - TANAH</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 90%">
          <thead class="thead-dark text-nowrap">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Alamat</th>
                <th>Luas</th>
                <th>Tahun Pengadaan</th>
                <th>Nilai Perolehan</th>
                <th>Nama OPD</th>
                <th>Nama sub - OPD</th>
                <th>Nama sub - OPD capslock</th>
                <th>Kab/Kota</th>
                <th>Asal Perolehan</th>
                <th>Keterangan</th>
                <th>Kode Barang</th>
                <th>Jenis Barang</th>
          </tr>
          </thead>
          <tbody>
            @foreach( $kiba as $inv_a )
            <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $inv_a->nama }}</td>
                  <td>{{ $inv_a->alamat }}</td>
                  <td>{{ $inv_a->luas }}</td>
                  <td>{{ $inv_a->tahun }}</td>
                  <td>{{ $inv_a->nilai }}</td>
                  <td>{{ $inv_a->opd }}</td>
                  <td>{{ $inv_a->sub_opd }}</td>
                  <td>{{ $inv_a->sub_opd_caps }}</td>
                  <td>{{ $inv_a->kota }}</td>
                  <td>{{ $inv_a->asal }}</td>
                  <td>{{ $inv_a->keterangan }}</td>
                  <td>{{ $inv_a->kode }}</td>
                  <td>{{ $inv_a->jenis }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
