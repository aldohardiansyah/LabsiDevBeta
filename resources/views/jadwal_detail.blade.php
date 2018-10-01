@extends('templates/template')
@section('title', 'Informasi')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <hr>
                <h5 class=""><center><strong>Jadwal Praktikum</strong></center></h5>
                <hr>
                <form>
                    <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
                    <input class="form-control mr-sm-2" type="text" placeholder="Masukan Kelas ex: 4KA22">
                    <button class="btn btn-outline-primary my-2" type="submit"><i class="fa fa-search fa-1x"></i> Cari Jadwal </button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <hr>

        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                    <div class="card-header" align="center">Data Jadwal Praktikum</div>
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
                    </div>
                    <div class="card-body">
                        @if ($data->laboratorium->kampus === 'E')
                            <div class="row ml-2 mr-2 mb-4">
                              <div class="col-lg-6">
                                <h3>Laboratorium Sistem Informasi</h3>
                                <h5>Kampus E Universitas Gunadarma</h5>
                                <p>Jalan Akses UI No.01 Kelapa Dua, Depok</p>
                                <p><strong>Laboratorium : </strong></p>
                                <p>Gedung 5 Lantai 3 Ruangan 1 (E531)</p>
                                <p>Gedung 5 Lantai 3 Ruangan 2 (E532)</p>
                                <p>Gedung 5 Lantai 3 Ruangan 3 (E533)</p>
                                <br>
                                <br>
                              </div>
                              <div class="col-lg-6">
                                  <div class="embed-responsive embed-responsive-16by9">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1699.6203860395667!2d106.84077722358421!3d-6.353442627910267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec475427cefd%3A0xc4e7eee0f871687!2sUniversitas+Gunadarma+Kampus+E!5e0!3m2!1sid!2sid!4v1531730695077" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                  </div>
                              </div>
                            </div>
                        @elseif ($data->laboratorium->kampus === 'H')
                            <div class="row ml-2 mr-2 mb-4">
                              <div class="col-lg-6">
                                <h3>Laboratorium Sistem Informasi Regular</h3>
                                <h5>Kampus H Universitas Gunadarma</h5>
                                <p>Jalan Akses UI No.01 Kelapa Dua, Depok</p>
                                <p><strong>Laboratorium : </strong></p>
                                <p>Gedung H Lantai 4 Ruangan 402 (H402)</p>
                                <p>Gedung H Lantai 4 Ruangan 403 (H403)</p>
                                <p>Gedung H Lantai 4 Ruangan 4045 (H4045)</p>
                                <p>Gedung H Lantai 4 Ruangan 406 (H406)</p>
                                <p>Gedung H Lantai 4 Ruangan 407 (H407)</p>
                                <p>Gedung H Lantai 4 Ruangan 408 (H408)</p>
                                <p>Gedung H Lantai 4 Ruangan 409 (H409)</p>
                                <br>
                                <br>
                              </div>
                              <div class="col-lg-6">
                                  <div class="embed-responsive embed-responsive-16by9">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.3084563182374!2d106.837089367984!3d-6.354100772540043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac6a328c299b269d!2sUniversitas+Gunadarma%2C+Kampus+H!5e0!3m2!1sid!2sid!4v1531990251742" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                  </div>
                              </div>
                            </div>
                        @endif

                        <br>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->

@endsection
