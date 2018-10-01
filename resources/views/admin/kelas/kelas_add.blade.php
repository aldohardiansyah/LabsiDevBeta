@extends('templates/template')
@section('title', 'Tambah Data Informasi')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <hr>
            <h5 class=""><center><strong>Tambah Data Kelas</strong></center></h5>
            <hr>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <div class="mt-4 mb-2">
            <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Tambah Data Kelas</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                          <form method="POST" action="{{route('admin_kelas.insert')}}">
                  @csrf
                    <div class="form-group"><!--Separator Busway-->
                    <label for="staticEmail" class="col-form-label"><strong>Kelas</strong></label>
                        <input class="form-control" placeholder="Masukan Kelas, ex: 4KA22"  id="addkelas" name="kelas" required>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Jurusan</strong></label>
                          <select class=" selectdua form-control" name="jurusan" required  >
                              <option disabled selected>Pilih Jurusan</option>
                              @foreach ($datajurusan as $datajurusan)
                                  <option value="{{$datajurusan->id}}">{{$datajurusan->jurusan}}</option>
                              @endforeach
                          </select>
                    </div><!--Busway Separator-->
                    <div class="form-group"><!--Separator Busway-->
                      <label for="staticEmail" class="col-form-label"><strong>Kampus</strong></label>
                          <input class="form-control" placeholder="Masukan Kampus"  id="kampus" name="kampus" required>
                    </div><!--Busway Separator-->

                    <hr class="mt-5">
                    <center>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{route('admin_kelas')}}" class="btn btn-secondary">Batal</a>
                    </center>
                </form>
                      </div>

                  </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
