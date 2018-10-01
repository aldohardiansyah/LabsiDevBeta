@extends('templates/template')
@section('title', 'Beranda')

@section('content')


    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/slide1.jpg')">
                    <div class="carousel-caption d-md-block">
                        <h3><strong>Laboratorium Sistem Informasi</strong></h3>
                        <h5>Universitas Gunadarma</h5>
                        <br>
                        <a href="{{route('jadwal')}}" class="btn btn-outline-primary">Jadwal Praktikum</a>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/slide2.jpg')">
                    <div class="carousel-caption d-md-block">
                        <h3><strong>Laboratorium Sistem Informasi</strong></h3>
                        <h5>Universitas Gunadarma</h5>
                        <br>
                        <a href="{{route('laboratorium')}}" class="btn btn-outline-primary">Laboratorium</a>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/slide22.jpg')">
                    <div class="carousel-caption d-md-block">
                        <h3><strong>Laboratorium Sistem Informasi</strong></h3>
                        <h5>Universitas Gunadarma</h5>
                        <br>
                        <a href="{{route('login')}}" class="btn btn-outline-primary">Login Asisten</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>{{ session('status') }}</center>
        </div>
    @endif

    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <hr>
                <h5 class=""><center><strong>Selamat Datang di Lab Sistem Informasi</strong></center></h5>
            </div>
            <div class="col-lg-4"></div>
        </div>


        <div class="mt-5 row marketing">
            <div class="col-lg-4">
                <i class="fa fa-info fa-4x"></i>
                <h3 class="mt-3">Informasi</h3>
                <p>Informasi terbaru setiap kegiatan praktikum Laboratorium Sistem Informasi</p>
                <p><a class="btn btn-outline-primary" href="{{route('informasi')}}" role="button">Lihat selengkapnya »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <i class="fa fa-calendar-alt fa-4x"></i>
                <h3 class="mt-3">Jadwal</h3>
                <p>Jadwal lengkap kegiatan praktikum Laboratorium Sistem Informasi</p>
                <p><a class="btn btn-outline-primary" href="#" role="button">Lihat selengkapnya »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <i class="fa fa-building fa-4x"></i>
                <h3 class="mt-3">Laboratorium</h3>
                <p>Mengetahui Lokasi Laboratorium Tempat Praktikum Berlangsung dengan Mudah</p>
                <p><a class="btn btn-outline-primary" href="#" role="button">Lihat selengkapnya »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>


        <hr>
        <h5 class="mt-1"><center><strong>Informasi</strong></center></h5>

        <div class="mt-4">
            <div class="row mb-2">
                @foreach ($data as $data)
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary"><i class="fa fa-bullhorn fa-1x"></i> Informasi</strong>
                                <h5 class="mb-0">
                                    <a class="text-dark" href="{{route('informasi_detail', $data->id)}}">{{$data->judul}}</a>
                                </h5>
                                <div class="mb-1 text-muted">{{date('d-m-Y', strtotime($data->tgl_buat))}}</div>
                                <p class="card-text mb-auto"><?php
                                $slug=substr($data->isi,3,160);
                                echo htmlspecialchars_decode(htmlspecialchars_decode($slug)).'...';
                                ?>
                            </p>
                            <a href="{{route('informasi_detail', $data->id)}}">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <hr>

    <!-- Features Section -->
    <div class="row ml-2 mr-2 mb-4">
        <div class="col-lg-6">
            <h2>Laboratorium Sistem Informasi</h2>
            <h4>Universitas Gunadarma</h4>
            <p>Jalan Akses UI No.01 Kelapa Dua, Depok</p>
            <strong>Sekretariat </strong>
            <p>Kampus E Gedung 4 Lantai 3 (E431)</p>
            <br>
            <br>
            <p>Labsi-Gunadarma.com</p>
        </div>
        <div class="col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1699.6203860395667!2d106.84077722358421!3d-6.353442627910267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec475427cefd%3A0xc4e7eee0f871687!2sUniversitas+Gunadarma+Kampus+E!5e0!3m2!1sid!2sid!4v1531730695077" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- /.row -->


</div>
<!-- /.container -->

@endsection
