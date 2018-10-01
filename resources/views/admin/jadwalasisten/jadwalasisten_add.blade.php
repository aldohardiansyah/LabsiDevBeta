@extends('templates/template')
@section('title', 'Praktikum')

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
                <h4><center> Tambah Data Jadwal Praktikum </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Data Jadwal Asisten</div>
                  <div class="card-body">
                      <div class="row mt-4">
                          <div class="col-lg-3">
                              <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" placeholder="Cari/Sortir Data" type="text" id="cari">
                              </form>
                          </div>
                      </div>
                      <br>
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered ">
                            <thead>
                              <tr  class="table-primary table-active" align="center">
                                <th scope="col" width="5%">No.</th>
                                <th scope="col" width="10%">Kelas</th>
                                <th scope="col">Kampus</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Shift</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Laboratorium</th>
                                <th scope="col">Kode Praktikum</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col" width="15%">Proses</th>
                              </tr>
                            </thead>
                            <tbody id="isi">
                                <?php $no = 0;?>
                                  @foreach ($data as $data) <?php $no++ ;?>
                                      <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$data->kelas->kelas}}</td>
                                        <td>{{$data->kelas->kampus}}</td>
                                        <td>{{$data->hari}}</td>
                                        <td>{{$data->shift}}</td>
                                        <td>{{$data->jam_mulai}} sd {{$data->jam_selesai}}</td>
                                        <td>{{$data->laboratorium->laboratorium}}</td>
                                        <td>{{$data->praktikum->kode_praktikum}}</td>
                                        <td>{{$data->praktikum->matkul}}</td>
                                        <td align="center">
                                            @if ($data->laboratorium->kampus=='E')
                                                <span>
                                                      <a href="{{route('admin_jadwalasisten.add_detail2', $data->id)}}" class="btn btn-primary btn-xsm">Atur Asisten</a>
                                                </span>
                                            @else
                                                <span>
                                                      <a href="{{route('admin_jadwalasisten.add_detail1', $data->id)}}" class="btn btn-primary btn-xsm">Atur Asisten</a>
                                                </span>
                                            @endif

                                        </td>
                                      </tr>
                                  @endforeach
                            </tbody>
                          </table>
                      </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->


    <script type="text/javascript">


        document.getElementById('cari').value = '';
        $(document).ready(function(){

            //Buat Nyari Data Tabel
             $("#cari").on("keyup", function() {
               var value = $(this).val().toLowerCase();
               $("#isi tr").filter(function() {
                 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
               });
             });


            });

    </script>

@endsection
