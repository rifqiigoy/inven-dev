@extends('layout/table')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary mb-2">Data User</h6>
            </div>
            <div class="col-auto">

                <a href="#" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah User
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
                <th>Nama</th>
                <th>E-mail</th>
                <th>Role</th>
                <th>Tanggal Dibuat</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $user as $data )
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td><i>Belum Dibuat</i></td>
                <td>{{ $data->created_at }}</td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
