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
                <h4><center> Data Praktikum </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Laboratorium Sistem Informasi</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nama Mata Kuliah</strong></label>
                                <label for="staticEmail" class="col-sm-8 col-form-label">{{$data->matkul}}</label>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kode Mata Kuliah</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{$data->kode_matkul}}</label>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kode Praktikum</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{$data->kode_praktikum}}</label>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tingkat</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{$data->tingkat}}</label>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Jurusan</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{$data->jurusan->jurusan}}</label>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Semester</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{$data->semester}}</label>
                            </div><!--Busway Separator-->
{{--
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tanggal Mulai</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{date('d-m-Y', strtotime($data->tgl_mulai))}}</label>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tanggal Selesai</strong></label>
                                    <label for="staticEmail" class="col-sm-3 col-form-label">{{date('d-m-Y', strtotime($data->tgl_selesai))}}</label>
                            </div><!--Busway Separator--> --}}

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Aplikasi Praktikum</strong></label>
                                    <label class="col-sm-8 col-form-label">{{$data->aplikasi}}</label>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Materi Praktikum</strong></label>
                                    <a href="{{$data->materi}}" class="col-sm-8 col-form-label">{{$data->materi}}</a>
                            </div><!--Busway Separator-->

                            <hr class="mt-5">
                            <center>
                                <a href="{{route('admin_praktikum')}}"type="submit" class="btn btn-secondary">Kembali</a>
                            </center>
                      </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
