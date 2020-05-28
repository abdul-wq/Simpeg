@extends('lay.lay')
@section('title', 'Halaman Laporan')
@section('header')

@section('konten')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Laporan</h4>

                <a href="/admin/laporan" class="btn btn-primary btn-sm float-left" data-toggle="modal" 
                data-target="#laporan">Tambah Laporan</a>

                <div class="card-tools">
                  <div class="input-group input-group-sm float-right" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach( $laporan as $lap )
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $lap->tgl }} </td>
                      <td>
                      		<a href="/admin/laporan/update/{{$lap->id}}" class="btn btn-info btn-sm float-left mr-2" data-toggle="modal" 
                data-target="#ubah">Edit</a>

                <a href="/admin/laporan/{{$lap->id}}" class="btn btn-danger btn-sm"> Hapus </a>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

<!-- Modal Tambah -->
<div class="modal fade" id="laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="post">
      	@csrf
      <div class="modal-body">
		   <div class="input-group input-group-sm mb-3">
		 	 <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal</span>
		  	</div>
		  <input type="date" class="form-control" name="tgl" value="" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
		</div>
      </div>

	      	<div class="modal-footer">
	      	  <button type="submit" class="btn btn-success">Simpan</button>
	     	 </div>
      	</form>
    </div>
  </div>
</div>


<!-- Modal Edit -->
 <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/admin/laporan/update/{{$lap->id}}" method="post">
      	@csrf
      	@method('patch')
      	    <div class="modal-body">
		   <div class="input-group input-group-sm mb-3">
		 	 <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal</span>
		  	</div>
		  <input type="date" class="form-control" name="tgl" value="" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="">
		</div>
		</div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-success">Simpan</button>
	      </div>
      	</form>
    </div>
  </div>
</div>

@endsection



@section('footer')