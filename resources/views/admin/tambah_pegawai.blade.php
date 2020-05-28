@extends('lay.lay')
@section('title', 'Halaman Tambah Pegawai')
@section('header')

@section('konten')

<div class="container">
<div class="row">
<div class="col-md-8">
<div class="card card-primary">
              <div class="card-header">
                <h5 class="card-title">Halaman Tambah pegawai</h5>
              </div>
              <form action="/admin/pegawai" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" autofocus="" placeholder="ex : Bambang Wis Rangiro" autocomplete="off" name="nama" value="{{old('nama')}}">
                  </div>
                    <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" autofocus="" placeholder="" autocomplete="off" value="{{old('tgl_lahir')}}" name="tgl_lahir">
                  </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" autofocus="" placeholder="ex : Jl.Kartini, Rembang Kota, Blok D5/1" autocomplete="off" value="{{old('alamat')}}" name="alamat">
                  </div>
                      <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" autofocus="" placeholder="ex : +62813xxxxxxxx" name="no_telp" autocomplete="off" value="{{old('no_telp')}}">
                  </div>
                    <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" autofocus="" placeholder="ex : Tukang Ketik" name="jabatan" autocomplete="off" value="{{old('jabatan')}}">
                  </div>

                  <a href="/admin/pegawai" class="btn btn-info btn-sm"> Kembali</a>
                  <button type="submit" class="btn btn-primary btn-sm float-right mb-3 mr-3">Tambah Data</button>
                  <button type="reset" class="btn btn-warning btn-sm float-right mr-3"> Cancel </button>
              </form>
            </div>
        </div>
      </div>
  </div>

@endsection
@section('footer')