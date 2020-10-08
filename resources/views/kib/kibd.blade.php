@extends('layout/table')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DATA KIB D - JALAN, IRIGASI, DAN JARINGAN</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 90%">
          <thead class="thead-dark text-nowrap">
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Alamat</th>
                <th>Luas</th>
                <th>Bulan Pengadaan</th>
                <th>Tahun Pengadaan</th>
                <th>Nilai Perolehan</th>
                <th>Umur Ekonomis</th>
                <th>Nama OPD</th>
                <th>Nama Sub-OPD</th>
                <th>Kab/Kota</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $kibd as $inv_d )
              <tr>
                  <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                  <td>{{ $inv_d->kode }}</td>
                  <td>{{ $inv_d->nama }}</td>
                  <td>{{ $inv_d->alamat }}</td>
                  <td>{{ $inv_d->luas }}</td>
                  <td>{{ $inv_d->bulan }}</td>
                  <td>{{ $inv_d->tahun }}</td>
                  <td>{{ $inv_d->nilai }}</td>
                  <td>{{ $inv_d->umur }}</td>
                  <td>{{ $inv_d->opd }}</td>
                  <td>{{ $inv_d->sub_opd }}</td>
                  <td>{{ $inv_d->kota }}</td>
                  <td>{{ $inv_d->keterangan }}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
