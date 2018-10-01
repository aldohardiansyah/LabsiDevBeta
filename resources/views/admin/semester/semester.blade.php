@extends('templates/template')
@section('title', 'Semester')

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
        <div class="col-lg-12">
                <h4><center> Semester </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-1">Tambah Semester</button>
        </div>
        <div class="col-lg-6"></div> <!--separatorbusway-->
        <div class="col-lg-3">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" placeholder="Cari/Sortir Data" type="text" id="cari">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
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
                      <th scope="col">Tahun Ajaran</th>
                      <th scope="col">Semester</th>
                      <th scope="col">Kode Semester</th>
                      <th scope="col">Status</th>
                      <th scope="col" width="10%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                      <?php $no = 0;?>
                      @foreach ($data as $data) <?php $no++ ;?>
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$data->tahun_ajaran}}</td>
                      <td>{{$data->semester}}</td>
                      <td>{{$data->kode_semester}}</td>
                      <td>
                          @if ($data->status==1)
                              Semester Aktif
                          @else
                              Tidak Aktif
                          @endif
                      </td>
                      <td align="center">
                          <span>
                                <button class="btn btn-success btn-xsm edit" type="button"
                                data-id="{{ $data->id }}"
                                data-kode_semester="{{ $data->kode_semester }}"
                                data-toggle="modal" data-target="#modal-2">
                                <i class="fa fa-pencil-alt"></i></button>
                          </span>
                          <span>
                              <button class="btn btn-danger btn-xsm delete" type="button"
                              data-id="{{ $data->id }}"
                              data-toggle="modal" data-target="#modal-3">
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
    <hr>


</div>
<!-- /.container -->



@include('admin.semester.semester_add')
@include('admin.semester.semester_edit')
@include('admin.semester.semester_delete')

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

        //Parsing Data Ke Edit
        $(document).on('click', '.edit', function() {
          $('#id').val($(this).data('id'));
          $('#kode_semester').val($(this).data('kode_semester'));
        });

        //Delete Modal Dialog
        $(document).on('click', '.delete', function() {
          $('#iddata').val($(this).data('id'));
        });


});

</script>

@endsection
