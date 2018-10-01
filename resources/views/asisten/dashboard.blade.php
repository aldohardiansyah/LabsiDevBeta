@extends('templates/template')
@section('title', 'Dashboard Asisten')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class=" row mt-5">

        <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header"><center><strong>Laboratorium Sistem Informasi</strong></center></div>
              <div class="card-body" align="center">
                  <?php $ava=Auth::user()->ava ?>
                  <img class="rounded float-center ml-4 form-group" alt="" width="150px" src="{{url('storage/'.$ava)}}">
                  <h3 class="mt-3">{{$data->nama_lengkap}}</h3>
                  <h5 class="mt-2">{{$data->jabatan}}</h5>
                  <hr>
                  <div class="row">
                      <div class="col-sm-2" align="center">
                          <i class="fa fa-home fa-1x"></i>
                      </div>
                      <div class="col-sm-10 ">
                          <p align="left">{{$data->alamat}}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-2" align="center">
                          <i class="fa fa-phone fa-1x"></i>
                      </div>
                      <div class="col-sm-10 ">
                          <p align="left">{{$data->no_tlp}}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-2" align="center">
                          <i class="fa fa-envelope-open  fa-1x"></i>
                      </div>
                      <div class="col-sm-10 ">
                          <p align="left">{{$data->email}}</p>
                      </div>
                  </div>

                  <hr>
                  <p><a class="btn btn-secondary" href="{{route('asisten_profile')}}" role="button">Lihat Detail &raquo;</a></p>
              </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8">
                    <h4> Selamat Datang, {{$data->nama_lengkap}} </h4>
                    <div class="text-muted"><h5> <small> {{$hari}}, {{$tanggal}} </small></h5></div>
                </div>
                <div class="col-lg-4" align="right">
                    @if ($cekmenu_daftarulang->status == 1)
                      <a href="{{route('asisten_isianjadwal')}}"><small>Daftar Ulang Asisten Sudah Bisa Dilakukan !</small></a>
                    @else
                      <p class="text-muted"><small>Daftar Ulang Asisten Belum tersedia</small></p>
                    @endif
                </div>
            </div>

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
                    <center>{{ session('status') }}<center>
                  </div>
              @endif
            <hr>
            <h6 class=""><center><strong>Informasi</strong></center></h6>
            <div class="row">
                @foreach ($informasi as $informasi)
                    <div class="col-sm-6 mb-2">
                        <div class="card card-body">
                            <a href="{{route('informasi_detail', $informasi->id)}}" style="color:#3E3F3A;">
                            <strong class="card-title">{{$informasi->judul}}</strong>
                            <small class="card-subtitle mb-2 text-muted"> {{date('d F Y', strtotime($informasi->tgl_buat))}}</small>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>
            <h6 class=""><center><strong>Jadwal Bertugas</strong></center></h6>
            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr  class="table-light table-active" align="center">
                      <th scope="col" width="5%">No.</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col" width="10%">Kelas</th>
                      <th scope="col">Hari</th>
                      <th scope="col">Shift / Jam</th>
                      <th scope="col">Lab</th>
                      <th scope="col">Praktikum</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody  id="isi">
                      {{--CEK DATA ADA APA ENGGA--}}
                      @if (count($jadwalasisten)<1)
                          <tr>
                              <td colspan="8">
                                  <center> <p class="text-muted">{{$kosong}}</p> </center>
                              </td>
                          </tr>
                      @else
                          <?php $no = 0; ?>
                          @foreach ($jadwalasisten as $jadwalasisten)
                          <?php $no++; ?>
                            <tr>
                              <td align="center">{{$no}}</td>
                              <td align="center">{{$jadwalasisten->jabatan_tugas}}</td>
                              <td align="center">{{$jadwalasisten->jadwalpraktikum->kelas['kelas']}}</td>
                              <td align="center">{{$jadwalasisten->jadwalpraktikum->hari}}</td>
                              <td align="center">{{$jadwalasisten->jadwalpraktikum->shift}}
                              ( {{$jadwalasisten->jadwalpraktikum->jam_mulai}} s.d {{$jadwalasisten->jadwalpraktikum->jam_selesai}})</td>
                              <td align="center">{{$jadwalasisten->jadwalpraktikum->laboratorium['laboratorium']}}</td>
                              <td align="center">{{$jadwalasisten->jadwalpraktikum->praktikum['kode_praktikum']}}</td>
                              <td align="center">
                                  <span>
                                        <a href="{{route('asisten_jadwaldetail', $jadwalasisten->jadwalpraktikum->id)}}" class="btn btn-primary  btn-xsm"> <i class="fa fa-eye"></i></a>
                                  </span>
                              </td>
                            </tr>
                          @endforeach
                      @endif
                  </tbody>
                </table>
            </div>

        <hr>
        <div class="row">
            <div class="col-md-6">
              @if ($cekmenu_daftarulang->status == 1)
                <a href="{{route('asisten_isianjadwal')}}"><small>Daftar Ulang Asisten Sudah Bisa Dilakukan !</small></a>
              @else
                <p class="text-muted"><small>Daftar Ulang Asisten</small></p>
              @endif
            </div>
            <div class="col-md-6">
                <p class="text-muted" align="right"><small>Ajukan Surat Resign</small></p>
            </div>
        </div>






        </div>

    </div>


</div>
<!-- /.container -->

@endsection
