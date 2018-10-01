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
                  <div class="card-header" align="center">Isian Jadwal Bertugas</div>
                  <div class="card-body">
                      <div class="form-group">
                      <form method="POST" action="{{ route('asisten_isianjadwal.insert') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <div class="row">
                              <div class="col-lg-12">
                                  <strong>Tata Cara Pengisian</strong>
                                  <small id="fileHelp" class="form-text text-muted">- Isi Jadwal Bertugas sesuai dengan jadwal kosong anda</center></small>
                                  <small id="fileHelp" class="form-text text-muted">- Jadwal Hari Minggu Wajib di Isi, kecuali yang beribadah gereja pada hari minggu</center></small>
                                  <small id="fileHelp" class="form-text text-muted">- Data Keterangan Shift menyesuaikan dengan jam praktikum di Lab E</center></small>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-lg-6">
                                <center><strong>Isian Hari</strong></center>
                                <hr>
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Senin</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Masukan Shift Bertugas"  id="inputSenin" name="senin" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Selasa</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Masukan Shift Bertugas"  id="inputSenin" name="selasa" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Rabu</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Masukan Shift Bertugas"  id="inputSenin" name="rabu" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Kamis</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Masukan Shift Bertugas"  id="inputSenin" name="kamis" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Jumat</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Masukan Shift Bertugas"  id="inputSenin" name="jumat" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Sabtu</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control" placeholder="Masukan Shift Bertugas"  id="inputSenin" name="sabtu" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <div class="form-group row"><!--Separator Busway-->
                                    <div class="col-sm-1"></div>
                                    <label for="inputSenin" class="col-sm-2 col-form-label"><strong>Minggu</strong></label>
                                    <div class="col-sm-7">
                                        <input class="form-control"  id="inputSenin" name="minggu" value="12345" required>
                                    </div>
                                  </div><!--Busway Separator-->
                                  <small id="fileHelp" class="form-text text-muted"><center>*Shift Bertugas Merupakan Shift Kosong, Yang Bisa Dijadikan Sebagai Jadwal Bertugas</center></small>
                              </div>
                              <div class="col-lg-6">
                                <center><strong>Keterangan Shift</strong></center>
                                <hr>
                                <table class="table table-hover table-bordered ">
                                  <thead>
                                    <tr  class="table-primary table-active" align="center">
                                      <th scope="col" width="5%">Shift</th>
                                      <th scope="col" width="15%">Jam Mulai</th>
                                      <th scope="col" width="15%">Jam Selesai</th>
                                    </tr>
                                  </thead>
                                  <tbody id="isi">
                                    <tr>
                                      <td align="center">1</td>
                                      <td align="center">07.30</td>
                                      <td align="center">09.30</td>
                                    </tr>
                                    <tr>
                                      <td align="center">2</td>
                                      <td align="center">09.30</td>
                                      <td align="center">11.30</td>
                                    </tr>
                                    <tr>
                                      <td align="center">3</td>
                                      <td align="center">11.30</td>
                                      <td align="center">13.30</td>
                                    </tr>
                                    <tr>
                                      <td align="center">4</td>
                                      <td align="center">13.30</td>
                                      <td align="center">15.30</td>
                                    </tr>
                                    <tr>
                                      <td align="center">5</td>
                                      <td align="center">15.30</td>
                                      <td align="center">17.30</td>
                                    </tr>
                                    <tr>
                                      <td align="center">6</td>
                                      <td align="center">17.30</td>
                                      <td align="center">19.30</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>


                            <hr class="mt-5">
                            <center>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit Jadwal</button>
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
