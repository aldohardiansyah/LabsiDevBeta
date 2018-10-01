@extends('templates/template')
@section('title', 'Beranda')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class=" row mt-5">

        <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header"><center><strong>Laboratorium Sistem Informasi</strong></center></div>
              <div class="card-body" align="center">
                  <img class="rounded float-center ml-4 form-group" alt="" width="150px" src="{{url('storage/'.$data->foto)}}">
                  <hr>
                  <div class="row ml-5">
                      <br>
                      Upload Foto Baru
                      <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="photo">
                      <small id="fileHelp" class="form-text text-muted">Fomat File JPG, <strong>ukuran max 1mb</strong></small>
                      <hr>
                  </div>
              </div>
            </div>
        </div>

        <div class="col-lg-8">

            <div class="card mb-3">
              <div class="card-header"><center><strong>Informasi Dasar</strong></center></div>
              <div class="card-body row" >
                  <div class="col-lg-12">
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Nama Lengkap</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>NPM</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="npm" value="{{$data->npm}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Kelas</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="kelas" value="{{$data->kelas}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>IPK</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="ipk" value="{{$data->ipk}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Alamat</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="nama_lengkap" value="{{$data->alamat}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>No. Telp</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="no_tlp" value="{{$data->no_tlp}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="email" value="{{$data->email}}">
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                      <label for="staticEmail" class="col-sm-3 col-form-label"><strong>Skills</strong></label>
                      <div class="col-sm-7">
                          <input class="form-control" name="kemampuan" value="{{$data->kemampuan}}">
                      </div>
                    </div><!--Busway Separator-->

              </div>
            </div>

        </div>
        <div align="center">
             <p><a class="btn btn-success"href="#" role="button"><i class="fa fa-check"></i> Simpan Data </a></p>
        </div>
    </div>


</div>
<!-- /.container -->

@endsection
