<div class="modal fade bd-example-modal-lg" id="modal-addinfo" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                    <form method="POST" action="{{route('admin_informasi.insert')}}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                      <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Judul Informasi</strong></label>
                          <input class="form-control" placeholder="Judul Informasi"  id="informasi" name="judul" required>
                      </div><!--Busway Separator-->
                      <div class="form-group"><!--Separator Busway-->
                        <label for="staticEmail" class="col-form-label"><strong>Kategori Informasi</strong></label>
                            <select class="form-control" name="kategori" required  >
                                <option disabled selected>Pilih Kategori</option>
                                <option value="Public">Public</option>
                                <option value="Asisten">Asisten</option>
                            </select>
                      </div><!--Busway Separator-->
                      <div class="form-group"><!--Separator Busway-->
                        <label for="staticEmail" class="col-form-label"><strong>Gambar Tajuk</strong></label>
                            <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="photo">
                            <small id="fileHelp" class="form-text text-muted">Fomat File JPG, <strong>ukuran max 2mb</strong></small>
                      </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                        <label for="staticEmail" class="col-form-label"><strong>Isi Informasi</strong></label>
                        <textarea class="ckeditor" id="ckeditor" cols="10" rows="11" name="isi">
                        </textarea>
                    </div><!--Busway Separator-->

                    <hr class="mt-2">
                    <div class="mb-3">
                        <center>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{route('admin_informasi')}}" class="btn btn-secondary">Batal</a>
                        </center>
                    </div>
                    <fieldset>
                    </form>

                </div>
        </div>
    </div>
</div>
