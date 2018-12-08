   <?php 
require 'tambah_kegiatan.php';
?>
   <!-- Modal -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengmas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-md-6">
              <label for="Nama">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control mb">
            </div>

            <div class="col-md-6">
              <label for="kelamin">waktu</label>
              <input type="date" id="kelamin" name="waktu" class="form-control">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label for="Telp">Jam</label>
              <input type="time" id="telp" name="Jam" class="form-control">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label for="Alamat">Tempat</label>
              <input type="text" id="alamat" name="tempat" class="form-control">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-6">
              <label for="Alamat">Deskripsi</label>
              <input type="textarea" id="Angkatan" name="deskripsi" class="form-control">
            </div>
          </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn" name="tambah_kegiatan">Simpan Perubahan</button>
        </div>
      </div>
    </div>
  </div>