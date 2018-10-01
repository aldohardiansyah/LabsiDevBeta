@extends('templates/template')
@section('title', 'Pendaftaran')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-5 mt-5 mb-5 ">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <hr>
            <h5 class=""><center><strong>Pendaftaran Asisten Baru</strong></center></h5>
            <h5 class=""><center><strong>Laboratorium Sistem Informasi</strong></center></h5>
            <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
            <hr>
            <h5 class=""><center><strong>BELUM DIBUKA/SUDAH DITUTUP</strong></center></h5>
            <h5 class=""><center><strong>Silahkan Coba Lagi Nanti</strong></center></h5>
            <center><a href="{{route('beranda')}}" class="btn btn-primary btn-sm mt-3">Kembali</a></center>
            <hr>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    <!-- /.container -->

@endsection
