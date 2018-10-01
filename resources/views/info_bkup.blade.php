@extends('templates/template')
@section('title', 'Informasi')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4 mb-3">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <hr>
                <h5 class=""><center><strong>Informasi</strong></center></h5>
                <hr>
                <form>
                    <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari Informasi">
                    <button class="btn btn-outline-primary my-2" type="submit">Cari</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <strong>Informasi Terbaru</strong>
        <hr>

        <div class="INFORMASI">
            <!-- Heading Row -->
            <div class="row my-4">
              <div class="col-lg-4" align="center">
                <img class="img-fluid img-responsive rounded" width="200px" src="{{url('storage/'.$datapalingbaru->photo)}}" alt="">
              </div>
              <!-- /.col-lg-8 -->
              <div class="col-lg-8 mt-3" align="center">
                <h2>{{$datapalingbaru->judul}}</h2>
                <p><?php
                $slug=substr($datapalingbaru->isi,3,200);
                echo htmlspecialchars_decode(htmlspecialchars_decode($slug));
                ?></p>
                <a class="btn btn-outline-primary btn-lg" href="{{route('informasi_detail', $datapalingbaru->id)}}">Baca Selengkapnya</a>
              </div>
              <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
            <br>
            <strong>Informasi Lainnya</strong>
            <hr>
            <!-- Content Row -->
            <div class="row">
            @foreach ($data2 as $data2)
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <div class="card-body" align="center">
                    <h3 class="card-title"><a class="text-dark" href="{{route('informasi_detail', $data2->id)}}">{{$data2->judul}}</a></h3>
                    <div class="mb-1 text-muted">{{date('d F Y', strtotime($data2->tgl_buat))}}</div>
                    <p class="card-text"><?php
                    $slug=substr($data2->isi,3,100);
                    echo htmlspecialchars_decode(htmlspecialchars_decode($slug));
                    ?></p>
                  </div>
                  <div class="card-footer" align="Center">
                    <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            @endforeach

            </div>
            <!-- /.row -->
        </div>


        <hr>
        <div class="mt-4">
            @foreach ($data as $data)
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body bg-light d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary"> <i class="fa fa-bullhorn fa-1x"></i> Informasi</strong>
                            <h4 class="mb-0">
                                <a class="text-dark" href="{{route('informasi_detail', $data->id)}}">{{$data->judul}}</a>
                            </h4>
                            <div class="mb-1 text-muted">{{date('d-m-Y', strtotime($data->tgl_buat))}}</div>
                            <p class="card-text mb-auto"><?php
                            $slug=substr($data->isi,3,200);
                            echo htmlspecialchars_decode(htmlspecialchars_decode($slug));
                            ?>
                        </p>
                        <a href="{{route('informasi_detail', $data->id)}}">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
<!-- /.container -->

@endsection
