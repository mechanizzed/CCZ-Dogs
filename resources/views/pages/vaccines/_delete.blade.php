<!-- Modal -->
<div class="modal fade" id="delete_{{ $content->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Você tem certeza que deseja remover esta vacina?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Vacina: </strong> {{ $content->name }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="{{ route('vaccines.delete', $content->id) }}" class="btn btn-danger">SIM, REMOVER ESTA VACINA</a>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>