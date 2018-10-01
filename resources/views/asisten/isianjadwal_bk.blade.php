@extends('templates/template')
@section('title', 'Pendaftaran')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <hr>
            <h5 class=""><center><strong>Isian Jadwal Asisten</strong></center></h5>
            <h5 class=""><center><strong>Laboratorium Sistem Informasi</strong></center></h5>
            <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
            <hr>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Isi Jadwal Kosong Anda Yang Akan di Gunakan Sebagai Jadwal Bertugas</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                      <form method="POST" action="{{ route('pendaftaran.insert') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Senin</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSenin1" checked="" type="checkbox" name="senin[]" value="1">
                                    <label class="custom-control-label" for="customCheckSenin1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSenin2" checked="" type="checkbox" name="senin[]" value="2">
                                    <label class="custom-control-label" for="customCheckSenin2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSenin3" checked="" type="checkbox" name="senin[]" value="3">
                                    <label class="custom-control-label" for="customCheckSenin3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSenin4" checked="" type="checkbox" name="senin[]" value="4">
                                    <label class="custom-control-label" for="customCheckSenin4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSenin5" checked="" type="checkbox" name="senin[]" value="5">
                                    <label class="custom-control-label" for="customCheckSenin5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSenin6" checked="" type="checkbox" name="senin[]" value="6">
                                    <label class="custom-control-label" for="customCheckSenin6">Shfit 6</label>
                                  </div>
                              </div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Selasa</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSelasa1" checked="" type="checkbox" name="selasa[]" value="1">
                                    <label class="custom-control-label" for="customCheckSelasa1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSelasa2" checked="" type="checkbox" name="selasa[]" value="2">
                                    <label class="custom-control-label" for="customCheckSelasa2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSelasa3" checked="" type="checkbox" name="selasa[]" value="3">
                                    <label class="custom-control-label" for="customCheckSelasa3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSelasa4" checked="" type="checkbox" name="selasa[]" value="4">
                                    <label class="custom-control-label" for="customCheckSelasa4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSelasa5" checked="" type="checkbox" name="selasa[]" value="5">
                                    <label class="custom-control-label" for="customCheckSelasa5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSelasa6" checked="" type="checkbox" name="selasa[]" value="6">
                                    <label class="custom-control-label" for="customCheckSelasa6">Shfit 6</label>
                                  </div>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Rabu</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRabu1" checked="" type="checkbox" name="rabu[]" value="1">
                                    <label class="custom-control-label" for="customCheckRabu1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRabu2" checked="" type="checkbox" name="rabu[]" value="2">
                                    <label class="custom-control-label" for="customCheckRabu2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRabu3" checked="" type="checkbox" name="rabu[]" value="3">
                                    <label class="custom-control-label" for="customCheckRabu3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRabu4" checked="" type="checkbox" name="rabu[]" value="4">
                                    <label class="custom-control-label" for="customCheckRabu4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRabu5" checked="" type="checkbox" name="rabu[]" value="5">
                                    <label class="custom-control-label" for="customCheckRabu5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckRabu6" checked="" type="checkbox" name="rabu[]" value="6">
                                    <label class="custom-control-label" for="customCheckRabu6">Shfit 6</label>
                                  </div>
                              </div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kamis</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckKamis1" checked="" type="checkbox" name="kamis[]" value="1">
                                    <label class="custom-control-label" for="customCheckKamis1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckKamis2" checked="" type="checkbox" name="kamis[]" value="2">
                                    <label class="custom-control-label" for="customCheckKamis2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckKamis3" checked="" type="checkbox" name="kamis[]" value="3">
                                    <label class="custom-control-label" for="customCheckKamis3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckKamis4" checked="" type="checkbox" name="kamis[]" value="4">
                                    <label class="custom-control-label" for="customCheckKamis4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckKamis5" checked="" type="checkbox" name="kamis[]" value="5">
                                    <label class="custom-control-label" for="customCheckKamis5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckKamis6" checked="" type="checkbox" name="kamis[]" value="6">
                                    <label class="custom-control-label" for="customCheckKamis6">Shfit 6</label>
                                  </div>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Jumat</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckJumat1" checked="" type="checkbox" name="jumat[]" value="1">
                                    <label class="custom-control-label" for="customCheckJumat1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckJumat2" checked="" type="checkbox" name="jumat[]" value="2">
                                    <label class="custom-control-label" for="customCheckJumat2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckJumat3" checked="" type="checkbox" name="jumat[]" value="3">
                                    <label class="custom-control-label" for="customCheckJumat3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckJumat4" checked="" type="checkbox" name="jumat[]" value="4">
                                    <label class="custom-control-label" for="customCheckJumat4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckJumat5" checked="" type="checkbox" name="jumat[]" value="5">
                                    <label class="custom-control-label" for="customCheckJumat5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckJumat6" checked="" type="checkbox" name="jumat[]" value="6">
                                    <label class="custom-control-label" for="customCheckJumat6">Shfit 6</label>
                                  </div>
                              </div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Sabtu</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSabtu1" checked="" type="checkbox" name="sabtu[]" value="1">
                                    <label class="custom-control-label" for="customCheckSabtu1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSabtu2" checked="" type="checkbox" name="sabtu[]" value="2">
                                    <label class="custom-control-label" for="customCheckSabtu2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSabtu3" checked="" type="checkbox" name="sabtu[]" value="3">
                                    <label class="custom-control-label" for="customCheckSabtu3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSabtu4" checked="" type="checkbox" name="sabtu[]" value="4">
                                    <label class="custom-control-label" for="customCheckSabtu4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSabtu5" checked="" type="checkbox" name="sabtu[]" value="5">
                                    <label class="custom-control-label" for="customCheckSabtu5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckSabtu6" checked="" type="checkbox" name="sabtu[]" value="6">
                                    <label class="custom-control-label" for="customCheckSabtu6">Shfit 6</label>
                                  </div>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                              <div class="col-sm-1"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Minggu</strong><hr></label>
                              <div class="col-sm-3">
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckMinggu1" checked="" type="checkbox" name="minggu[]" value="1">
                                    <label class="custom-control-label" for="customCheckMinggu1">Shfit 1</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckMinggu2" checked="" type="checkbox" name="minggu[]" value="2">
                                    <label class="custom-control-label" for="customCheckMinggu2">Shfit 2</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckMinggu3" checked="" type="checkbox" name="minggu[]" value="3">
                                    <label class="custom-control-label" for="customCheckMinggu3">Shfit 3</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckMinggu4" checked="" type="checkbox" name="minggu[]" value="4">
                                    <label class="custom-control-label" for="customCheckMinggu4">Shfit 4</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckMinggu5" checked="" type="checkbox" name="minggu[]" value="5">
                                    <label class="custom-control-label" for="customCheckMinggu5">Shfit 5</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheckMinggu6" checked="" type="checkbox" name="minggu[]" value="6">
                                    <label class="custom-control-label" for="customCheckMinggu6">Shfit 6</label>
                                  </div>
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
