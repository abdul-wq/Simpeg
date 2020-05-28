@extends('lay.lay')
@section('title', 'Jabatan Pegawai')
@section('header')

@section('konten')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			  <div class="card">
              <div class="card-header">
                <h5 class="card-title">Halaman Tambah Jabatan </h5>
              </div>

			<form action="" method="post">
				@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_jabatan">Kode Jabatan</label>
                    <input type="text" name="kode_jabatan" class="form-control" id="kode_jabatan" value="" placeholder="Masukkan Kode Jabatan" autocomplete="off" autofocus="" value="{{old('kode_jabatan')}}">
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Nama Jabatan</label>
                    <input type="text" name="jabatan" autofocus="" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Baru" autocomplete="off" value="{{old('jabatan')}}">
                  </div>
           		 <button type="submit" class="btn btn-success float-right mb-2"> Tambah Jabatan</button>
           		</div>
            </form>
		</div>
	</div>


		<div class="col-md-6">
			  <div class="card">
              <div class="card-header">
                <h5 class="card-title">Halaman Edit Jabatan </h5>
              </div>
			<form action="" method="post">
				@csrf
				@method('patch')
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_jabatan">Kode Jabatan</label>
                    <input type="text" name="kode_jabatan" class="form-control" id="kode_jabatan" value="" placeholder="Masukkan Kode Jabatan" autocomplete="off" autofocus="" value="">
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Nama Jabatan</label>
                    <input type="text" name="jabatan" autofocus="" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Baru" autocomplete="off" value="">
                  </div>
           		 <button type="submit" class="btn btn-success float-right mb-2"> Edit Jabatan</button>
           		</div>
            </form>
		</div>
	</div>



<div class="container mt-5"> 
<div class="row"> 
	<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"> Daftar Jabatan </h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th> No </th>
                      <th> Kode Jabatan </th>
                      <th> Nama Jabatan </th>
                      <th> Aksi </th>
                    </tr>
                  </thead>
                  @foreach($jabatan as $j)
                  <tbody>
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $j->kode_jabatan }} </td>
                      <td> {{ $j->jabatan }} </td>
                      <td>
                      	
                      	<a href="/admin/jabatan/{{$j->id}}/delete" class="btn btn-danger btn-sm"> Hapus </a>
                      	<a href="/admin/jabatan/{{$j->id}}/update" class="btn btn-warning btn-sm"> Edit </a>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                    {{ $jabatan->links() }}
                </div>
              </div>
          	</div>
		</div>
	</div>


@endsection

@section('footer')