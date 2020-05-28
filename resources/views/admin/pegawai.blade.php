@extends('lay.lay')
@section('judul', 'Halaman Pegawai')
@section('header')

@section('konten')

<h3 class="ml-4"> Daftar Pegawai</h3>
 <div class="container">
 	<a href="/admin/tambah_pegawai" class="btn btn-primary btn-sm ml-3 mt-3"> Tambah Data</a>
 	<div class="col-md-8 mt-3">
		<ul class="list-group">
			@foreach ($pegawai as $p)
		  <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
		 		{{ $p->nama }}
		  <a href="/admin/pegawai/{{$p->id}}" class="badge badge-primary"> Detail</a>
  		@endforeach
 	 	</li>
 	 		{{ $pegawai->links() }}
	</div> 
</div>



@endsection
@section('footer')  