
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
                    <input type="text" name="kode_jabatan" class="form-control" id="kode_jabatan" value="" placeholder="Masukkan Kode Jabatan" autocomplete="off" autofocus="" value="{{$jabatan->kode_jabatan}}">
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Nama Jabatan</label>
                    <input type="text" name="jabatan" autofocus="" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Baru" autocomplete="off" value="{{$jabatan->jabatan}}">
                  </div>
           		 <button type="submit" class="btn btn-success float-right mb-2"> Edit Jabatan</button>
           		</div>
            </form>
		</div>
	</div>

