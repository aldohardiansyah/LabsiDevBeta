<div class="modal fade" id="modal-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Praktikum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="POST" action="{{route('admin_asisten.edit')}}">
                  @csrf
                    <div class="form-group"><!--Separator Busway-->
                        <input class="form-control" placeholder="Masukan Nama Lengap"  id="id" name="id" hidden>
                        <input class="form-control" placeholder="Masukan Nama Lengap"  id="namalengkap2" name="nama_lengkap" hidden>
                    <label for="staticEmail" class="col-form-label"><strong>Nama Lengkap</strong></label>
                        <input class="form-control" placeholder="Masukan Nama Lengap"  id="namalengkap" name="namalengkap" disabled>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>NPM</strong></label>
                          <input class="form-control" placeholder="Masukan Nama Lengap"  id="npm" name="npm" disabled>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Jabatan Sebelumnya</strong></label>
                          <input class="form-control" placeholder="Masukan Nama Lengap"  id="jabatan" name="jabatan" disabled>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Jabatan Baru</strong></label>
                          <select class="form-control" name="jabatan">
                              <option disabled selected>Pilih Jabatan</option>
                              <option value="Asisten">Asisten</option>
                              <option value="Ketua Asisten">Ketua Asisten</option>
                              <option value="PJ Shift">PJ Shift</option>
                          </select>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Password</strong></label>
                          <input class="form-control" placeholder="Kosongkan Jika Tidak Ada Perubahan Password"  id="password" name="password">
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
