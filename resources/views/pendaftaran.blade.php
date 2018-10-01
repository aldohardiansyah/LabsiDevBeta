@extends('templates/template')
@section('title', 'Pendaftaran')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <hr>
            <h5 class=""><center><strong>Pendaftaran Asisten</strong></center></h5>
            <h5 class=""><center><strong>Laboratorium Sistem Informasi</strong></center></h5>
            <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
            <hr>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Form Pendaftaran Asisten Laboratorium Sistem Informasi</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                      <form method="POST" action="{{ route('pendaftaran.insert') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nama Lengkap</strong></label>
                              <div class="col-sm-7">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kelas</strong></label>
                              <div class="col-sm-3">
                                  <input class="form-control"  placeholder="Masukan Kelas" name="kelas">
                              </div>
                              <label for="staticEmail" class="col-sm-1 col-form-label"><strong>NPM</strong></label>
                              <div class="col-sm-3">
                                  <input class="form-control"  placeholder="Masukan NPM"  name="npm">
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tempat Lahir</strong></label>
                              <div class="col-sm-3">
                                  <input class="form-control"  placeholder="Masukan tempat lahir" name="tempat_lahir">
                              </div>
                              <label for="staticEmail" class="col-sm-1 col-form-label"><strong>Tgl Lahir</strong></label>
                              <div class="col-sm-3">
                                    <input class="form-control" type="date"  id="example-date-input" name="tgl_lahir">
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2"><strong>Jenis Kelamin</strong></label>
                              <div class="col-sm-2">
                                  <label class="form-check form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="optionsRadios1" value="L">
                                    Laki-Laki
                                  </label>
                              </div>
                              <div class="col-sm-3">
                                  <label class="form-check form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="optionsRadios1" value="P">
                                    Perempuan
                                  </label>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                  <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kewarganegaraan</strong></label>
                                  <div class="col-sm-3">
                                    <select class="form-control selectdua" name="kewarganegaraan">
                                        <option value="WNI">Warga Negara Indonesia</option>
                                        <option value="WNA">Warga Negara Asing</option>
                                    </select>
                                  </div>
                                  <label for="staticEmail" class="col-sm-1 col-form-label"><strong>Agama</strong></label>
                                  <div class="col-sm-3">
                                    <select class="form-control selectdua" name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu"> Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                    </select>
                                  </div>

                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                              <div class="col-sm-7">
                                  <textarea class="form-control" id="exampleTextarea" rows="3" name="alamat"></textarea>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                  <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Email</strong></label>
                                  <div class="col-sm-3">
                                      <input class="form-control"  placeholder="Masukan email" name="email" >
                                  </div>
                                  <label for="staticEmail" class="col-sm-1 col-form-label"><strong>No. Tlp</strong></label>
                                  <div class="col-sm-3">
                                      <input class="form-control"  placeholder="Masukan no.tlp" name="no_tlp" >
                                  </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                  <label for="staticEmail" class="col-sm-2 col-form-label"><strong>IPK Terakhir</strong></label>
                                  <div class="col-sm-3">
                                      <input class="form-control"  placeholder="Masukan IPK Terakhir" name="ipk" >
                                  </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kemampuan</strong></label>
                              <div class="col-sm-7">
                                  <input class="form-control"  placeholder="Masukan Daftar Keahlian" name="kemampuan" >
                                  <small id="fileHelp" class="form-text text-muted">Pisahkan Kemampuan dengan tanda koma "," ex : Web Developing, Graphic Design, Android Developer</small>
                              </div>
                            </div><!--Busway Separator-->
                            <br>
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2"><strong>Foto Terbaru</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="photo">
                                    <small id="fileHelp" class="form-text text-muted">Fomat File JPG, <strong>ukuran max 1mb</strong></small>
                                </div>

                                  <label for="staticEmail" class="col-sm-1"><strong>CV</strong></label>
                                  <div class="col-sm-3">
                                      <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="cv">
                                      <small id="fileHelp" class="form-text text-muted"><strong> Fomat File PDF, ukuran max 1mb</strong></small>
                                  </div>
                            </div><!--Busway Separator-->
                            <br>
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2"><strong>Surat Lamaran</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="surat">
                                    <small id="fileHelp" class="form-text text-muted"><strong> Fomat File PDF, ukuran max 1mb</strong></small>
                                </div>
                                <label for="staticEmail" class="col-sm-1"><strong>Nilai</strong></label>
                                <div class="col-sm-3">
                                  <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="nilai">
                                  <small id="fileHelp" class="form-text text-muted"><strong>Fomat File PDF, ukuran max 1mb</strong></small>
                                </div>
                            </div><!--Busway Separator-->

                            <hr class="mt-5">
                            <center>
                                <small id="fileHelp" class="form-text text-muted">Periksa kembali data anda sebelum submit formulir, <strong>formulir yang telah disubmit tidak dapat diubah.</strong></small>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
                            </center>
                        </fieldset>
                        </form>
                      </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
