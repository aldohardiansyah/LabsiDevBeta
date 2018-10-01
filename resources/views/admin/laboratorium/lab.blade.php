@extends('templates/template')
@section('title', 'Laboratorium')

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
          <div class="alert alert-success">
            <center>{{ session('status') }}<center>
          </div>
          @endif
    </div>

    <div class="row">
        <div class="col-lg-12">
                <h4><center> Laboratorium </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-1">Tambah Data Laboratorium</button>
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
                      <th scope="col">Kampus</th>
                      <th scope="col">Laboratorium</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                      <?php $no = 0;?>
                      @foreach ($data as $data)
                          <?php $no++ ;?>
                          <tr>
                            <td>{{$no}}</td>
                            <td align="center">{{$data->kampus}}</td>
                            <td align="center">{{$data->laboratorium}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td align="center">
                                <span>
                                      <button class="btn btn-success btn-xsm edit" type="button"
                                      data-id="{{ $data->id }}"
                                      data-kampus="{{ $data->kampus }}"
                                      data-laboratorium="{{ $data->laboratorium }}"
                                      data-keterangan="{{ $data->keterangan }}"
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



@include('admin.laboratorium.lab_add')
@include('admin.laboratorium.lab_edit')
@include('admin.laboratorium.lab_delete')


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
          $('#editid').val($(this).data('id'));
          $('#editkampus').val($(this).data('kampus'));
          $('#editlaboratorium').val($(this).data('laboratorium'));
          $('#editketerangan').val($(this).data('keterangan'));
        });


        //Delete Modal Dialog
        $(document).on('click', '.delete', function() {
          $('#iddata').val($(this).data('id'));
        });

    });

</script>

@endsection
