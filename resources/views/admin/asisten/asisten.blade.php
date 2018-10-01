@extends('templates/template')
@section('title', 'Data Asisten')

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
                <h4><center> Asisten </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <a href="{{route('admin_asisten.resign')}}" class="btn btn-outline-danger"> Data Asisten Resign </a>
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
                      <th scope="col" width="15%">NPM</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Awal Bertugas</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                    <?php $no = 0;?>
                    @foreach ($data as $data)
                    <?php $no++ ;?>
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$data->npm}}</td>
                      <td>{{$data->nama_lengkap}}</td>
                      <td>{{$data->kelas}}</td>
                      <td>{{$data->jabatan}}</td>
                      <td>{{$data->semester}}</td>
                      <td align="center">
                          <span>
                                <a href="{{route('admin_asisten.detail', $data->id)}}" class="btn btn-primary  btn-xsm"> <i class="fa fa-eye"></i></a>
                          </span>
                          <span>
                              <button class="btn btn-success btn-xsm view" type="submit"
                              data-id="{{ $data->id }}"
                              data-npm="{{ $data->npm }}"
                              data-namalengkap="{{ $data->nama_lengkap }}"
                              data-jabatan="{{ $data->jabatan }}"
                              data-toggle="modal" data-target="#modal-1">
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



@include('admin.asisten.asisten_edit')
@include('admin.asisten.asisten_delete')


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


        //Parsing Data Ke Modal View
        $(document).on('click', '.view', function() {
          $('#id').val($(this).data('id'));
          $('#npm').val($(this).data('npm'));
          $('#namalengkap2').val($(this).data('namalengkap'));
          $('#namalengkap').val($(this).data('namalengkap'));
          $('#jabatan').val($(this).data('jabatan'));;
        });


        //Delete Modal Dialog
        $(document).on('click', '.delete', function() {
          $('#iddata').val($(this).data('id'));
        });


});

</script>

@endsection
