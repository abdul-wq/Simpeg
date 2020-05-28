@extends('lay.lay')
@section('title', 'Halaman Edit Pegawai')
@section('header')

@section('konten')

<div class="container">
<div class="row">
<div class="col-md-8">
<div class="card card-primary">
              <div class="card-header">
                <h5 class="card-title">Halaman Edit pegawai</h5>
              </div>
              <form action="" method="post">
                @csrf
                @method('patch')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="cth : Bambang Wis Rangiro" autocomplete="off" name="nama" value="{{ $pegawai->nama }}">
                  </div>
                    <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" placeholder="" autocomplete="off" value="{{ $pegawai->tgl_lahir }}" name="tgl_lahir">
                  </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="cth : Jl.Kartini, Rembang Kota, Blok D5/1" autocomplete="off" value="{{ $pegawai->alamat }}" name="alamat">
                  </div>
                      <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" placeholder="cth : +62813xxxxxxxx" name="no_telp" autocomplete="off" value="{{ $pegawai->no_telp }}">
                  </div>
                    <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" placeholder="cth : Tukaang Ketik" name="jabatan" autocomplete="off" value="{{ $pegawai->jabatan }}">
                  </div>

                  <a href="/admin/pegawai" class="btn btn-info btn-sm"> Kembali</a>
                  <button type="submit" class="btn btn-primary btn-sm float-right mb-3 mr-3">Edit Data</button>
                  <button type="reset" class="btn btn-warning btn-sm float-right mr-3"> Cancel </button>
              </form>
            </div>
        </div>
      </div>
  </div>

@endsection
@section('footer')