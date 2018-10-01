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
            <div class="row mb-2">
                @foreach ($data as $data)
                    <div class="col-lg-4">
                        <div class="card border-primary mb-3">
                            <div class="card-header"><strong>{{$data->kelas->kelas}} | {{$data->praktikum['kode_praktikum']}}</strong></div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{route('jadwal_detail', $data->id)}}"> {{$data->praktikum['matkul']}} </a></h5>
                                <small class="card-text">Hari : <strong> {{$data->hari}} </strong></small><br>
                                <small class="card-text">Shift : <strong> {{$data->shift}} ({{$data->jam_mulai}} sd {{$data->jam_selesai}}) </strong></small><br>
                                <small class="card-text">Materi Praktikum : <strong> {{$data->praktikum['aplikasi']}} </strong></small><br>
                                <small class="card-text">Laboratorium : <strong> {{$data->laboratorium['laboratorium']}} </strong></small><br>
                                <small class="card-text"><a href="{{route('peraturan')}}">Peraturan & Perlengkapan Praktikum >></a></small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
