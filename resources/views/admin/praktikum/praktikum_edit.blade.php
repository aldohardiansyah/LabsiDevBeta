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
                <h4><center> Tambah Data Praktikum </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Data  Praktikum</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                      <form method="POST" action="{{ route('admin_praktikum.edit') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <input class="form-control" placeholder="Masukan Kode Mata Kuliah" name="id" value="{{$data->id}}" hidden >
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kode Mata Kuliah</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" placeholder="Masukan Kode Mata Kuliah" name="kode_matkul" value="{{$data->kode_matkul}}" required>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kode Praktikum</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" placeholder="Masukan Kode Praktikum"  name="kode_praktikum" value="{{$data->kode_praktikum}}" required>
                                </div>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nama Mata Kuliah</strong></label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="Masukan Nama Mata Kuliah"  name="matkul" value="{{$data->matkul}}" required>
                                </div>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tingkat</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" placeholder="Masukan Tingkat"  name="tingkat" value="{{$data->tingkat}}" required>
                                    <small id="fileHelp" class="form-text text-muted">ex : 1KA, 2DB, 3KA</small>

                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Jurusan</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control select" name="jurusan">
                                        <option value="{{$data->id_jurusan}}">Data Dipilih : {{$data->jurusan->jurusan}}</option>
                                        @foreach ($jurusan as $jurusan)
                                        <option value="{{$jurusan->id}}">{{$jurusan->jurusan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Semester</strong></label>
                                <div class="col-sm-3">
                                    <select class="form-control select" name="semester">
                                        <option value="{{$data->semester}}">Data Dipilih : {{$data->semester}}</option>
                                        <option value="PTA"> Ganjil </option>
                                        <option value="ATA"> Genap </option>
                                    </select>
                                    <small id="fileHelp" class="form-text text-muted">Semester praktikum berlangsung</small>
                                </div>
                            </div><!--Busway Separator-->
{{-- 
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tanggal Mulai</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="date"  id="example-date-input"  name="tgl_mulai" placeholder="Masukan Tanggal Mulai" value="{{$data->tgl_mulai}}">
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tanggal Selesai</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="date"  id="example-date-input"  name="tgl_selesai" placeholder="Masukan Tanggal Selesai" value="{{$data->tgl_selesai}}">
                                </div>
                            </div><!--Busway Separator--> --}}

                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong> Link Materi Praktikum</strong></label>
                                <div class="col-sm-8">
                                    <input class="form-control" placeholder="Masukan Link Materi Praktikum"  name="materi" required value="{{$data->materi}}">
                                    <small id="fileHelp" class="form-text text-muted">Link materi praktikum dari data drive Labsi</small>
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
