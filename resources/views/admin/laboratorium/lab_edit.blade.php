<div class="modal fade" id="modal-2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Data Laboratorium</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="POST" action="{{route('admin_laboratorium.edit')}}">
                  @csrf
                  <input class="form-control" placeholder="Masukan Kampus"  id="editid" name="id" required hidden>
                  <div class="form-group"><!--Separator Busway-->
                    <label for="staticEmail" class="col-form-label"><strong>Kampus</strong></label>
                      <input class="form-control" placeholder="Masukan Kampus"  id="editkampus" name="kampus" required>
                  </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Laboratorium</strong></label>
                        <input class="form-control" placeholder="Masukan Laboratorium"  id="editlaboratorium" name="laboratorium" required>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Keterangan</strong></label>
                        <textarea  class="form-control" id="editketerangan" name="keterangan" rows="8" cols="80"></textarea>
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
