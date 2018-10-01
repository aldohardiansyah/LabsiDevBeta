@extends('templates/template')
@section('title', 'Informasi')

@section('content')


    <!-- Page Content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4"></div>
                <div class="col-lg-4">
                <hr>
                <h5 class=""><center><strong>Informasi</strong></center></h5>
                <hr>
                <center> <p> Semester Aktif : {{$semesteraktif->kode_semester}} </p> </center>
                </div>
            <div class="col-lg-4"></div>
        </div>

<hr>

        <div class="mt-4">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header"><strong>Informasi</strong> | <small class="text-muted"> {{date('d-m-Y h:s', strtotime($data->tgl_buat))}} - {{$data->user['name']}}</small></div>
                  <div class="card-body">
                    <h4 class="card-title"><strong>{{$data->judul}}</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="img img-responsive">
                                <img class="img-responsive rounded float-center ml-4 form-group" alt="" width="270px" src="{{url('storage/'.$data->photo)}}">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <?php echo htmlspecialchars_decode(htmlspecialchars_decode($data->isi)); ?>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container -->
@endsection
