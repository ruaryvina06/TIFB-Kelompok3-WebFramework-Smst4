@extends('item.layout')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Anggota</h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/anggota/tambah" class="btn btn-primary mb-1">Tambah Data</a>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
              </div>

              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                  <thead class="thead-light">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_anggota as $d)
                        <tr>
                            <td>{{ $d->nama_anggota }}</td>
                            <td>{{ $d->jenis_kelamin }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->no_telp }}</td>

                            <td><a href="{{ route('detail', $d->id)}}" class="btn btn-sm btn-info">Edit</a>  <a href="{{ route('hapus', $d->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>

        <!-- Modal Logout -->

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

@endsection


