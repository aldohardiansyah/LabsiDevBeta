@extends('templates/template')
@section('title', 'Beranda')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class=" row mt-5">

        <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header"><center><strong>Buat Catatan Baru</strong></center></div>
              <div class="card-body">
                  <form class="" action="{{route('asisten_catatan.insert')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label><small>Judul Catatan</small></label>
                        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul" name="judul_catatan">
                      </div>
                      <div class="form-group">
                         <label><small>Jenis Catatan</small></label>
                         <select class="form-control" id="exampleSelect1" name="jenis_catatan">
                               <option DISABLED>Pilih jenis Catatan</option>
                               <option value="Catatan Rekap">Catatan Rekap</option>
                               <option value="Catatan Jaga">Catatan Jaga</option>
                               <option value="Catatan Lain">Catatan Lain-Lain</option>

                         </select>
                       </div>
                      <div class="form-group">
                          <label><small>Isi Catatan</small></label>
                          <textarea class="ckeditor" id="ckeditor" cols="10" rows="11" name="isi">
                          </textarea>
                      </div>
                      <div class="form-group">
                           <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                  </form>
              </div>
            </div>
        </div>

        <div class="col-lg-8">
            <hr>
            <h6 class=""><center><strong>Daftar Catatan</strong></center></h6><br>
            <div class="row mb-2">
                @foreach ($data as $data)
                    <div class="col-md-6">
                      <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body bg-light d-flex flex-column align-items-start">
                          <strong class="d-inline-block mb-2 text-primary"> <i class="fa fa-sticky-note fa-1x"></i>{{$data->jenis_catatan}}</strong>
                          <h3 class="mb-0">
                            <a class="text-dark" href="#">{{$data->judul_catatan}}</a>
                          </h3>
                          <div class="mb-1 text-muted"> {{date('d-F-Y', strtotime($data->created_at))}}</div>
                          <p class="card-text mb-auto"><?php echo htmlspecialchars_decode(htmlspecialchars_decode($data->isi)); ?></P>
                        </div>
                        <div class="card-footer bg-light d-flex flex-column align-items-start">
                            <button class="btn btn-danger btn-xsm delete" type="button"
                            data-id="{{ $data->id }}"
                            data-toggle="modal" data-target="#modal-3">
                              <i class="fa fa-trash-alt"></i></button>
                        </div>
                      </div>

                    </div>
                @endforeach
          </div>
        </div>

    </div>


</div>
<!-- /.container -->


@include('asisten.catatan_delete');

<script type="text/javascript">
$(document).ready(function(){

        //Delete Modal Dialog
        $(document).on('click', '.delete', function() {
          $('#iddata').val($(this).data('id'));
        });


});

</script>

@endsection
