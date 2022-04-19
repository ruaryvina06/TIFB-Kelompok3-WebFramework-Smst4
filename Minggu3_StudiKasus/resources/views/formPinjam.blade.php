@extends('item/layout')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Peminjaman</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">Form Peminjaman</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          {{-- <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6> --}}
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
                <label for="InputNama">Nama Lengkap</label>
                <input class="form-control  mb-3" type="text" placeholder="Masukkan Nama Lengkap">
              {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small> --}}
            </div>
            <div class="form-group">
                <label for="InputIdBuku">Id Buku</label>
                <input class="form-control  mb-3" type="text" placeholder="Masukkan Id Buku">
              {{-- <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
            </div>
            <div class="form-group">
                <label for="InputJudulBuku">Judul Buku</label>
                <input class="form-control  mb-3" type="text" placeholder="Masukkan Judul Buku">
              {{-- <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div> --}}
            </div>
            <div class="form-group">
                <label for="InputQty">Qty</label>
                <input class="form-control  mb-3" type="text" placeholder="Masukkan Jumlah Buku">
            </div>
            <div class="form-group">
                <label for="InputNamaPetugas">Petugas</label>
                <input class="form-control  mb-3" type="text" placeholder="Masukkan Nama Petugas">
            </div>
            <div class="form-group" id="simple-date1">
                <label for="simpleDataInput">Simple Data Input</label>
                  <div class="input-group date">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                  </div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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
