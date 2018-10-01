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
              </div>
            </div>
            <div align="center">
                 <p><a class="btn btn-primary" href="{{route('asisten_profile_edit')}}" role="button"><i class="fa fa-pencil-alt"> </i> Edit Profil</a></p>
            </div>

        </div>

        <div class="col-lg-8">

            <div class="card mb-3">
              <div class="card-header"><center><strong>Informasi Dasar</strong></center></div>
              <div class="card-body row" >
                  <div class="col-lg-6">
                      <p> <strong>Nama Lengkap : </strong> {{$data->nama_lengkap}} </p>
                      <p> <strong>NPM : </strong> {{$data->npm}} </p>
                      <p> <strong>Kelas : </strong> {{$data->kelas}} </p>
                      <p> <strong>IPK : </strong> {{$data->ipk}} </p>
                  </div>
                  <div class="col-lg-6">
                      <p> <strong>Periode Awal Bertugas : </strong> {{$data->semester}}</p>
                      <p> <strong>Jabatan : </strong> {{$data->jabatan}}</p>
                  </div>
              </div>
          </div>

          <div class="card mb-3">
              <div class="card-header"><center><strong>Informasi Pribadi</strong></center></div>
              <div class="card-body row" >
                  <div class="col-lg-12">
                      <p> <strong>Alamat Tinggal : </strong> {{$data->alamat}} </p>
                      <p> <strong>No. Telp : </strong> {{$data->no_tlp}} </p>
                      <p> <strong>Alamat Email : </strong> {{$data->email}} </p>
                      <p> <strong>Skills : </strong> {{$data->kemampuan}} </p>
                      <hr>
                  </div>
                  <div class="col-lg-4" align="center">
                      <p><a href="{{route('asisten_cv', $data->npm )}}" class="btn btn-outline-primary  btn-xsm">Curriculum Vitae</a><p>
                  </div>
                  <div class="col-lg-4" align="center">
                      <p><a href="{{route('asisten_surat', $data->npm )}}" class="btn btn-outline-primary  btn-xsm">Surat Lamaran</a><p>
                  </div>
                  <div class="col-lg-4" align="center">
                      <p><a href="{{route('asisten_nilai', $data->npm )}}" class="btn btn-outline-primary  btn-xsm">DNS Terakhir</a><p>
                  </div>

              </div>
            </div>

        </div>

    </div>


</div>
<!-- /.container -->

@endsection
