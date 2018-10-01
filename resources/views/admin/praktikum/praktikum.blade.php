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
                <h4><center> Praktikum </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <a href="{{route('admin_praktikum.add')}}"  class="btn btn-outline-primary">Tambah Data Praktikum</a>
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
                      <th scope="col" width="10%">Kode Mata Kuliah</th>
                      <th scope="col">Mata Kuliah</th>
                      <th scope="col">Kode Praktikum</th>
                      <th scope="col">Tingkat</th>
                      <th scope="col">Semester</th>
                      {{-- <th scope="col">Materi</th> --}}
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                      <?php $no = 0;?>
                      @foreach ($data as $data)
                          <?php $no++ ;?>
                          <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->kode_matkul}}</td>
                            <td>{{$data->matkul}}</td>
                            <td>{{$data->kode_praktikum}}</td>
                            <td>{{$data->tingkat}}</td>
                            <td>{{$data->semester}}</td>
                            {{-- <td>{{$data->materi}}</td> --}}
                            <td align="center">
                                <span>
                                    <a href="{{route('admin_praktikum.detail', $data->id)}}" class="btn btn-primary btn-xsm"><i class="fa fa-eye"></i></a>

                                </span>
                                <span>
                                      <a href="{{route('admin_praktikum.update', $data->id)}}" class="btn btn-success btn-xsm"><i class="fa fa-pencil-alt"></i></a>
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

{{--
@include('admin.praktikum.praktikum_detail') --}}
@include('admin.praktikum.praktikum_delete')
{{-- @include('admin.praktikum.praktikum_add') --}}


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
          $('#kodematkul').val($(this).data('kodematkul'));
          $('#matkul').val($(this).data('matkul'));
          $('#kodepraktikum').val($(this).data('kodepraktikum'));
          $('#jurusan').val($(this).data('jurusan'));
          $('#tingkat').val($(this).data('tingkat'));
          $('#semester').val($(this).data('semester'));
          $('#materi').val($(this).data('materi'));
        });


        //Delete Modal Dialog
        $(document).on('click', '.delete', function() {
          $('#iddata').val($(this).data('id'));
        });


});

</script>

@endsection
