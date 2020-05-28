@extends('lay.lay')
@section('title', 'Data Pegawai')
@section('header')
@section('konten')

<div class="container">
	<div class="col-md-8">
		<div class="card">
  			<div class="card-body">
			    <h4 class="card-title">{{$pegawai->nama}}</h4>
			    <h6 class="card-subtitle mb-2 text-muted">{{$pegawai->tgl_lahir}}</h6>
			    <p> {{$pegawai->alamat}}</p>
			    <p> {{$pegawai->no_telp}} </p>
			    <p>{{$pegawai->jabatan}}</p>

			    <a href="/admin/pegawai/delete/{{$pegawai->id}}" class="btn btn-danger btn-sm"> Hapus Data </a>
			    <a href="/admin/edit_pegawai/{{$pegawai->id}}" class="btn btn-warning btn-sm ml-3"> Edit Data </a>

			    <a href="/admin/pegawai" class="card-link btn btn-primary btn-sm float-right">Kembali</a>
  			</div>
		</div>
	</div>
</div>


@endsection
@section('footer')