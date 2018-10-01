<div class="modal fade" id="modal-2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Semester Aktif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="POST" action="{{route('admin_semester.edit')}}">
                  @csrf
                    <div class="form-group"><!--Separator Busway-->
                        <input class="form-control" placeholder="Masukan Tahun Ajaran"  id="id" name="id" hidden>
                    <label for="staticEmail" class="col-form-label"><strong>Kode Semester</strong></label>
                        <input class="form-control" placeholder="Masukan Tahun Ajaran"  id="kode_semester" name="kode_semester" disabled>
                    </div><!--Busway Separator-->
                    <hr class="mt-5">
                    <center>
                        <button type="submit" class="btn btn-success">Tetapkan Semester Aktif</button>
                    </center>
                </form>
          </div>

      </div>
    </div>
  </div>
