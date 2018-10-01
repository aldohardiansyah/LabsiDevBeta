<div class="modal fade" id="modal-editjurusan">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="POST" action="{{route('admin_jurusan.edit')}}">
                  @csrf
                    <input class="form-control" placeholder="Masukan Kode Jurusan"  id="editjurusanid" name="id" hidden>
                    <div class="form-group"><!--Separator Busway-->
                        <label for="staticEmail" class="col-form-label"><strong>Kode Jurusan</strong></label>
                        <input class="form-control" placeholder="Masukan Kode Jurusan"  id="editjurusankode" name="kode" required>
                        <small id="fileHelp" class="form-text text-muted">contoh: Kode jurusan untuk jurusan Sistem Informasi = KA, jurusan Teknik Informatika = IA</strong></small>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                        <label for="staticEmail" class="col-form-label"><strong>Jurusan</strong></label>
                        <input class="form-control" placeholder="Masukan Nama Jurusan"  id="editjurusanjurusan" name="jurusan" required>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                        <label for="staticEmail" class="col-form-label"><strong>Fakultas</strong></label>
                        <input class="form-control" placeholder="Masukan Nama Fakultas"  id="editjurusanfakultas" name="fakultas" required>
                        <small id="fileHelp" class="form-text text-muted">contoh: Fakultas Industri, Fakultas Ilmu Komputer dan Teknologi Informasi</strong></small>
                    </div><!--Busway Separator-->

                    <hr class="mt-5">
                    <center>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </center>
                </form>
          </div>

      </div>
    </div>
  </div>
