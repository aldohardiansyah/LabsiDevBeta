@extends('templates/template')
@section('title', 'Praktikum')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="mt-4">
        <hr>
        <div class="row">
            <!-- Navigation -->
            @include('admin/navbar')

        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
                <h4><center> Tambah Data Jadwal Praktikum </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Data Jadwal Praktikum</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                      <form method="POST" action="{{ route('admin_jadwalpraktikum.insert') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Praktikum</strong></label>
                                <div class="col-sm-8">
                                    <select class="form-control selectdua select" name="id_praktikum">
                                        <option value="" disabled selected>Pilih Praktikum</option>
                                        @foreach ($datapraktikum as $datapraktikum)
                                            <option value="{{$datapraktikum->id}}"> {{$datapraktikum->matkul}} | {{$datapraktikum->kode_praktikum}}</option>
                                        @endforeach

                                    </select>
                                    <small id="fileHelp" class="form-text text-muted">Jika data Praktikum tidak ada, silahkan tambah data Praktikum terlebih dahulu di Panel Praktikum</small>
                                </div>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kelas</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control selectdua" name="id_kelas">
                                        <option value="" disabled selected>Pilih Kelas</option>
                                        @foreach ($datakelas as $datakelas)
                                        <option value="{{$datakelas->id}}">{{$datakelas->kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Laboratorium</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control selectdua" name="id_lab">
                                        <option value="" disabled selected>Pilih Lab</option>
                                        @foreach ($datalaboratorium as $datalaboratorium)
                                        <option value="{{$datalaboratorium->id}}">{{$datalaboratorium->laboratorium}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Hari</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control selectdua" name="hari">
                                        <option value="" disabled selected>Pilih Hari</option>
                                        <option value="Senin"> Senin </option>
                                        <option value="Selasa"> Selasa </option>
                                        <option value="Rabu"> Rabu </option>
                                        <option value="Kamis"> Kamis </option>
                                        <option value="Jumat"> Jumat </option>
                                        <option value="Sabtu"> Sabtu </option>
                                        <option value="Minggu"> Minggu </option>
                                    </select>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Shift</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control selectdua" name="shift">
                                        <option value="" disabled selected>Pilih Shift</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="123">Pagi</option>
                                        <option value="456">Siang</option>
                                    </select>
                                </div>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong> Jam Mulai</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" placeholder="Jadwal Praktikum Dimulai"  name="jam_mulai" required>
                                    <small id="fileHelp" class="form-text text-muted">Isikan jam praktikum mulai, ex 08:00</small>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong> Jam Selesai</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" placeholder="MJadwal Praktikum Selesai"  name="jam_selesai" required>
                                    <small id="fileHelp" class="form-text text-muted">Isikan jam praktikum selesai, ex 08:00</small>
                                </div>
                            </div><!--Busway Separator-->

                            <hr class="mt-5">
                            <center>
                                <small id="fileHelp" class="form-text text-muted">Periksa kembali kelengkapan data sebelum disimpan! </small>
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
