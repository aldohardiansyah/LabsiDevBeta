<div class="modal fade" id="modal-3">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Perhatian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<form method="POST" action="{{route('admin_asisten.revoke')}}">
    @csrf
        <div class="modal-body">
          <input type="text" name="iddata" id="iddata" hidden >
          <p>Akses user akan di cabut, apakah ana setuju melakukan aksi ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger" >Revoke</button>
        </div>
</form>
      </div>
    </div>
  </div>
