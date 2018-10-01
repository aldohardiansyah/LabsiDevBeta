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
                <h4><center> Tambah Data Jadwal Bertugas Asisten </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Data Jadwal</div>
                  <div class="card-body">

                      <div class="form-group row"><!--Separator Busway-->
                          <div class="col-sm-1"></div>
                          <label for="staticEmail" class="col-sm-2 col-label"><strong>Praktikum</strong></label>
                          <div class="col-sm-3">
                              {{$data->praktikum->matkul}}
                          </div>
                          <label for="staticEmail" class="col-sm-2 col-label"><strong>Laboratorium</strong></label>
                          <div class="col-sm-3">
                              {{$data->Laboratorium['laboratorium']}}
                          </div>
                      </div><!--Busway Separator-->

                      <div class="form-group row"><!--Separator Busway-->
                          <div class="col-sm-1"></div>
                          <label for="staticEmail" class="col-sm-2 col-label"><strong>Kelas</strong></label>
                          <div class="col-sm-3">
                              {{$data->kelas->kelas}}
                          </div>
                          <label for="staticEmail" class="col-sm-2 col-label"><strong>Jurusan</strong></label>
                          <div class="col-sm-3">
                              {{$data->kelas->jurusan['jurusan']}}
                          </div>
                      </div><!--Busway Separator-->

                      <div class="form-group row"><!--Separator Busway-->
                          <div class="col-sm-1"></div>
                          <label for="staticEmail" class="col-sm-2 col-label"><strong>Hari</strong></label>
                          <div class="col-sm-3">
                              {{$data->hari}}
                          </div>
                          <label for="staticEmail" class="col-sm-2 col-label"><strong>Shift</strong></label>
                          <div class="col-sm-3">
                              {{$data->shift}} ({{$data->jam_mulai}} s.d. {{$data->jam_selesai}})
                          </div>
                      </div><!--Busway Separator-->

                      <div class="form-group mt-3">

                      <form method="POST" action="{{ route('admin_jadwalasisten.insert1') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <hr>
                                <div align="center">Data Asisten</div>
                            <hr>
                            <br>
                            <div class="form-group row"><!--Separator Busway-->
                                <input class="form-control" value="{{$data->id}}"  name="id_jadwalpraktikum" required hidden>
                                <div class="col-sm-2"></div>
                                <label for="staticEmail" class="col-sm-3 col-form-label"><strong>PJ Shift</strong></label>
                                <div class="col-sm-5">
                                    <select class="form-control selectdua" name="pjshift">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($pj as $pj)
                                        <option value="{{$pj->id_asisten}}">{{$pj->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                                <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Ketua Asisten</strong></label>
                                <div class="col-sm-5">
                                    <select class="form-control selectdua" name="ketuaasisten">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($ketua as $ketua)
                                        <option value="{{$ketua->id_asisten}}">{{$ketua->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                                <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Asisten 1</strong></label>
                                <div class="col-sm-5">
                                    <select class="form-control selectdua" name="asisten1">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($asisten as $dataasisten3)
                                        <option value="{{$dataasisten3->id_asisten}}">{{$dataasisten3->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                                <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Asisten 2</strong></label>
                                <div class="col-sm-5">
                                    <select class="form-control selectdua" name="asisten2">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($asisten as $dataasisten3)
                                        <option value="{{$dataasisten3->id_asisten}}">{{$dataasisten3->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
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
