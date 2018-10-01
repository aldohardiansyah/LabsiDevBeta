@extends('templates/template')
@section('title', 'Dashboard')

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
                <h4><center> Dashboard </center></h4>
            </div>
        </div>

        <div class="row mt-4">

            <div class="col-lg-4">
                <div class="card border-light mb-3">
                    <div class="card-header"><center><strong>Aktifitas Terakhir</strong></center></div>
                    <div class="card-body">
                        @foreach ($aktivitas as $aktivitas)
                            <small class="list-group-item">{{$aktivitas->aktivitas}}</small>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card border-light mb-3">
                    <div class="card-header"><center><strong>Informasi Terbit</strong></center></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered ">
                                    <thead>
                                        <tr  class="table-primary table-active" align="center">
                                            <th scope="col" width="5%">No.</th>
                                            <th scope="col" width="40%">Judul</th>
                                            <th scope="col" width="40%">Slug</th>
                                            <th scope="col" width="10%">Proses</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isi">
                                        <?php $no = 0;?>
                                        {{--CEK DATA ADA APA ENGGA--}}
                                        @if (count($datainformasi)<1)
                                            <tr>
                                                <td colspan="7">
                                                    <center> <p class="text-muted">{{$kosong}}</p> </center>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($datainformasi as $datainformasi) <?php $no++ ;?>
                                                <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$datainformasi->judul}}</td>
                                                    <td>{{$datainformasi->slug}}</td>
                                                    <td align="center">
                                                        <span>
                                                            <a href="{{route('admin_informasi.detail', $datainformasi->id)}}" class="btn btn-primary mb-1 btn-xsm"> <i class="fa fa-eye"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card border-light mb-3">
                    <div class="card-header"><center><strong>Praktikum Hari Ini</strong></center></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered ">
                                    <thead>
                                        <tr  class="table-primary table-active" align="center">
                                            <th scope="col" width="5%">No.</th>
                                            <th scope="col" width="15%">Kelas</th>
                                            <th scope="col" width="15%">Hari</th>
                                            <th scope="col" width="30%">Shift / Jam</th>
                                            <th scope="col">Laboratorium</th>
                                            <th scope="col">Kode Praktikum</th>
                                            <th scope="col" width="15%">Proses</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isi">
                                        <?php $no = 0;?>
                                        {{--CEK DATA ADA APA ENGGA--}}
                                        @if (count($data)<1)
                                            <tr>
                                                <td colspan="7">
                                                    <center> <p class="text-muted">{{$kosong}}</p> </center>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($data as $data) <?php $no++ ;?>
                                                <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$data->kelas->kelas}}</td>
                                                    <td>{{$data->kelas->kampus}}</td>
                                                    <td align="center">{{$data->shift}}
                                                        ( {{$data->jam_mulai}} s.d {{$data->jam_selesai}})</td>
                                                    <td>{{$data->laboratorium['laboratorium']}}</td>
                                                    <td>{{$data->praktikum['kode_praktikum']}}</td>
                                                    <td align="center">
                                                        <span>
                                                            <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- /.container -->

    @endsection
