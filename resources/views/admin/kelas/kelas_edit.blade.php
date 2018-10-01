<div class="modal fade" id="modal-editkelas">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="POST" action="{{route('admin_kelas.edit')}}">
                  @csrf
                    <div class="form-group"><!--Separator Busway-->
                        <input class="form-control" placeholder="Masukan Nama Lengap"  id="editkelasid" name="id" hidden>
                    <label for="staticEmail" class="col-form-label"><strong>Kelas</strong></label>
                        <input class="form-control" placeholder="Masukan Kelas"  id="editkelaskelas" name="kelas">
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Jurusan</strong></label>
                          <input class="form-control" placeholder="Masukan Jurusan"  id="editkelasjurusan" name="jurusan" disabled>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Kampus</strong></label>
                          <input class="form-control" placeholder="Masukan Kampus"  id="editkelaskampus" name="kampus">
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
