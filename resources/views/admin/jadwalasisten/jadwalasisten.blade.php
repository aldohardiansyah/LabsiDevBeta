@extends('templates/template')
@section('title', 'Jadwal Asisten')

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
                <h4><center> Jadwal Asisten </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <a href="{{route('admin_jadwalasisten.add')}}"  class="btn btn-outline-primary">Tambah Jadwal Asisten</a>
        </div>
        <div class="col-lg-6"></div> <!--separatorbusway-->
        <div class="col-lg-3">
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" placeholder="Cari/Sortir Data" type="text" id="cari">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search" disabled></i></button>
            </form>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr  class="table-secondary table-active" align="center">
                      <th scope="col" width="5%">No.</th>
                      <th scope="col">Nama Asisten</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col" width="10%">Kelas</th>
                      <th scope="col">Praktikum</th>
                      <th scope="col">Hari</th>
                      <th scope="col">Shift</th>
                      <th scope="col">Laboratorium</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody  id="isi">
                      @if (count($data)<1)
                          <tr>
                              <td colspan="9">
                                  <center> <p class="text-muted">{{$kosong}}</p> </center>
                              </td>
                          </tr>
                      @else
                          <?php $no = 0;?>
                          @foreach ($data as $data) <?php $no++ ;?>
                          <tr>
                              <td>{{$no}}</td>
                              <td>{{$data->asisten['nama_lengkap']}}</td>
                              <td>{{$data->jabatan_tugas}}</td>
                              <td>{{$data->jadwalpraktikum->kelas['kelas']}}</td>
                              <td>{{$data->jadwalpraktikum->praktikum['kode_praktikum']}}</td>
                              <td>{{$data->jadwalpraktikum->hari}}</td>
                              <td>{{$data->jadwalpraktikum->shift}}</td>
                              <td>{{$data->jadwalpraktikum->laboratorium['laboratorium']}}</td>

                              <td align="center">
                                  <span>
                                      <button class="btn btn-danger btn-xsm delete" type="button"
                                      data-id="{{ $data->id }}"
                                      data-toggle="modal" data-target="#modal-3">
                                        <i class="fa fa-trash-alt"></i></button>
                                  </span>
                              </td>
                          </tr>
                        @endforeach
                      @endif

                    {{-- <tr>
                      <td>1</td>
                      <td>Aldo Hardiansyah</td>
                      <td>PJ</td>
                      <td>4KA01</td>
                      <td>Senin</td>
                      <td>1</td>
                      <td>07.30-09.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                          <span>
                                <button class="btn btn-success btn-xsm" type="submit"><i class="fa fa-pencil-alt"></i></button>
                          </span>
                          <span>
                                <button class="btn btn-danger btn-xsm" type="submit"><i class="fa fa-trash-alt"></i></button>
                          </span>
                      </td>
                    </tr> --}}
                  </tbody>
                </table>
            </div>

        </div>
    </div>
    <hr>


</div>
<!-- /.container -->


@include('admin.jadwalasisten.jadwalasisten_delete')

<script type="text/javascript">

$(document).ready(function(){

    //Buat Nyari Data Tabel
     $("#cari").on("keyup", function() {
       var value = $(this).val().toLowerCase();
       $("#isi tr").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });

     //Delete Modal Dialog
     $(document).on('click', '.delete', function() {
       $('#iddata').val($(this).data('id'));
     });

});

</script>


@endsection
