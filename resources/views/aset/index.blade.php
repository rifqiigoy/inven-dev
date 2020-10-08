@extends('layout/table')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary mb-2">DATA ASET</h6>
            </div>
            <div class="col-auto">
                <a href="/aset/create" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Input Barang
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 90%">
          <thead class="thead-dark text-nowrap">
            <tr>
                <th>No</th>
                <th>Jenis Barang/ Nama Barang</th>
                <th>Merk/ Type</th>
                <th>Kode Barang</th>
                <th>Register</th>
                <th>Lokasi</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $aset as $data )
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->merk }}</td>
                <td>{{ $data->kode }}</td>
                <td>{{ $data->register }}</td>
                <td class="text-nowrap"><a href="/ruangan/{{ $data->ruangan->id}}">{{ $data->lokasi }}</a></td>
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->keterangan }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
