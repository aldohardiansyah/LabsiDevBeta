@extends('templates/template')
@section('title', 'Laboratorium')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row mt-4">
        <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <hr>
            <h5 class=""><center><strong>Laboratorium</strong></center></h5>
            <hr>
               <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
            </div>
        <div class="col-lg-4"></div>
    </div>

<hr>

      <!-- Features Section -->
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
      <br>
      <!-- /.row -->

<hr>

    <!-- Features Section -->
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
    <!-- /.row -->
    <br>


<hr>

    <!-- Features Section -->
    <div class="row ml-2 mr-2 mb-4">
      <div class="col-lg-6">
        <h3>Laboratorium Sistem Informasi Karawaci</h3>
        <h5>Kampus K Universitas Gunadarma</h5>
        <p>Jalan Akses UI No.01 Kelapa Dua, Depok</p>
        <strong>Sekretariat </strong>
        <p>Kampus E Gedung 4 Lantai 3 (E431)</p>
        <br>
        <br>
        <p>Labsi-Gunadarma.com</p>
      </div>
      <div class="col-lg-6">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.5939424125004!2d106.61534473676518!3d-6.232357209832808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee8cba5271e0063!2sUniversitas+Gunadarma+Kampus+K+Karawaci!5e0!3m2!1sid!2sid!4v1531990543611" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
    </div>
    <!-- /.row -->
    <br>

<hr>

    <!-- Features Section -->
    <div class="row ml-2 mr-2 mb-4">
      <div class="col-lg-6">
        <h3>Laboratorium Sistem Informasi Cengkareng</h3>
        <h5>Kampus L Universitas Gunadarma</h5>
        <p>Jalan Akses UI No.01 Kelapa Dua, Depok</p>
        <p><strong>Laboratorium : </strong></p>
        <p>Gedung L Lantai 2 Lab 1</p>
        <p>Gedung L Lantai 3 Lab 2</p>
        <br>
        <br>
        <p>Labsi-Gunadarma.com</p>
      </div>
      <div class="col-lg-6">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1514.8145347013713!2d106.73407251793581!3d-6.137508262431975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d2bbf732ee7597a!2sGunadarma+University!5e0!3m2!1sid!2sid!4v1531991080674" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
    </div>
    <!-- /.row -->
    <br>





</div>
<!-- /.container -->

@endsection
