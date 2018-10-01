@extends('templates/template')
@section('title', 'Kelas')

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
    </div>

    <div class="row">

        <div class="col-lg-7">
                <h4><center> Kelas </center></h4>
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <a href="{{route('admin_kelas.add')}}"  class="btn btn-outline-primary">Tambah Data Kelas</a>
                    </div>
                    <div class="col-lg-5"></div> <!--separatorbusway-->
                    <div class="col-lg-3">
                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" placeholder="Cari/Sortir Data" type="text" id="cari2">
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered ">
                              <thead>
                                <tr  class="table-primary table-active" align="center">
                                  <th scope="col" width="5%">No.</th>
                                  <th scope="col">Kelas</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Kampus</th>
                                  <th scope="col">Proses</th>
                                </tr>
                              </thead>
                              <tbody id="isi2">
                                <?php $no2 = 0;?>
                                @foreach ($data as $data)
                                <?php $no2++ ;?>
                                <tr>
                                  <td>{{$no2}}</td>
                                  <td>{{$data->kelas}}</td>
                                  <td>{{$data->jurusan->jurusan}}</td>
                                  <td>{{$data->kampus}}</td>
                                  <td align="center">
                                      <span>
                                            <button class="btn btn-success btn-xsm editkelas" type="button"
                                            data-id="{{ $data->id }}"
                                            data-kelas="{{$data->kelas}}"
                                            data-jurusan="{{$data->jurusan->jurusan}}"
                                            data-kampus="{{ $data->kampus}}"
                                            data-toggle="modal" data-target="#modal-editkelas">
                                            <i class="fa fa-pencil-alt"></i></button>
                                      </span>
                                      <span>
                                          <button class="btn btn-danger btn-xsm deletekelas" type="button"
                                          data-id="{{ $data->id }}"
                                          data-toggle="modal" data-target="#modal-deletekelas">
                                            <i class="fa fa-trash-alt"></i></button>
                                      </span>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>

        <div class="col-lg-5">
                <h4><center> Jurusan </center></h4>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-addjurusan">Tambah Data Jurusan</button>
                    </div>
                    <div class="col-lg-3">
                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" placeholder="Cari/Sortir Data" type="text" id="cari">
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered ">
                              <thead>
                                <tr  class="table-primary table-active" align="center">
                                  <th scope="col" width="5%">No.</th>
                                  <th scope="col" width="5%">Kode</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col" width="20%">Proses</th>
                                </tr>
                              </thead>
                              <tbody id="isi">
                                  <?php $no = 0;?>
                                  @foreach ($datajurusan as $datajurusan)
                                  <?php $no++ ;?>
                                <tr>
                                  <td>{{$no}}</td>
                                  <td>{{$datajurusan->kode_jurusan}}</td>
                                  <td>{{$datajurusan->jurusan}}</td>
                                  <td align="center">
                                      <span>
                                            <button class="btn btn-success btn-xsm editjurusan" type="button"
                                            data-id="{{ $datajurusan->id }}"
                                            data-kode="{{$datajurusan->kode_jurusan}}"
                                            data-jurusan="{{$datajurusan->jurusan}}"
                                            data-fakultas="{{ $datajurusan->fakultas}}"
                                            data-toggle="modal" data-target="#modal-editjurusan">
                                            <i class="fa fa-pencil-alt"></i></button>
                                      </span>
                                      <span>
                                          <button class="btn btn-danger btn-xsm deletejurusan" type="button"
                                          data-id="{{ $datajurusan->id }}"
                                          data-toggle="modal" data-target="#modal-deletejurusan">
                                            <i class="fa fa-trash-alt"></i></button>
                                      </span>
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

@include('admin.kelas.kelas_edit')
@include('admin.kelas.kelas_delete')
@include('admin.kelas.jurusan_add')
@include('admin.kelas.jurusan_edit')
@include('admin.kelas.jurusan_delete')




<script type="text/javascript">

document.getElementById('cari').value = '';
document.getElementById('cari2').value = '';
$(document).ready(function(){

        //Buat Nyari Data Tabel Kelas
         $("#cari").on("keyup", function() {
           var value = $(this).val().toLowerCase();
           $("#isi tr").filter(function() {
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
           });
         });


        //Buat Nyari Data Tabel Jurusan
         $("#cari2").on("keyup", function() {
           var value = $(this).val().toLowerCase();
           $("#isi2 tr").filter(function() {
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
           });
         });


        //Delete Modal Dialog
        $(document).on('click', '.deletekelas', function() {
          $('#iddata2').val($(this).data('id'));
        });
        //Edit Modal Dialog
        $(document).on('click', '.editkelas', function() {
          $('#editkelasid').val($(this).data('id'));
          $('#editkelaskelas').val($(this).data('kelas'));
          $('#editkelasjurusan').val($(this).data('jurusan'));
          $('#editkelaskampus').val($(this).data('kampus'));
        });


        //Delete Modal Dialog
        $(document).on('click', '.deletejurusan', function() {
          $('#iddata').val($(this).data('id'));
        });
        //Edit Modal Dialog
        $(document).on('click', '.editjurusan', function() {
          $('#editjurusanid').val($(this).data('id'));
          $('#editjurusankode').val($(this).data('kode'));
          $('#editjurusanjurusan').val($(this).data('jurusan'));
          $('#editjurusanfakultas').val($(this).data('fakultas'));
        });


});


</script>


@endsection
