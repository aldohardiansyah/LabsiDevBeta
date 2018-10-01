<div class="modal fade" id="modal-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Semester</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="POST" action="{{route('admin_semester.insert')}}">
                  @csrf
                    <div class="form-group"><!--Separator Busway-->
                    <label for="staticEmail" class="col-form-label"><strong>Tahun Ajaran</strong></label>
                        <input class="form-control" placeholder="Masukan Tahun Ajaran"  id="tahun_ajaran" name="tahun_ajaran" required>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Semester</strong></label>
                          <select class="form-control" name="semester" required>
                              <option disabled selected>Pilih Semester</option>
                              <option value="Ganjil">Ganjil</option>
                              <option value="Genap">Genap</option>
                          </select>
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
