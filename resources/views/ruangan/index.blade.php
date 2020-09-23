@extends('layout/table')

@section('content')
{{-- <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @foreach ($ruangan as $ruang)
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $ruang->lokasi}}</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ruang->nama_lokasi}}</div>
            </div>
            <div class="col-auto">
                <a href="/ruangan/{{ $ruang->id }}" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div> --}}

<div class="card shadow mb-4 mx-auto border-bottom-primary" style="width: 50%">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">RUANGAN</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 90%">
          <thead class="thead-dark text-nowrap">
            <tr>
                <th>No</th>
                <th>Kode Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $ruangan as $ruang )
            <tr>
                {{-- <th scope="row" class="text-center">{{ $loop->iteration }}</th> --}}
                <td>{{ $ruang->id }}</td>
                <td>{{ $ruang->lokasi }}</td>
                <td>{{ $ruang->nama_lokasi }}</td>
                <td>
                    {{-- <a href="/ruangan/{{ $ruang->id }}" class="btn btn-info btn-circle">
                        <i class="fas fa-info-circle"></i>
                    </a> --}}
                    <a href="/ruangan/{{ $ruang->id }}" class="btn-sm btn-info btn-icon-split">
                        <span class="icon text-white-10">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Lihat</span>
                      </a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
