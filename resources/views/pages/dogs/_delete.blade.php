<!-- Modal -->
<div class="modal fade" id="delete_{{ $content->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja deletar este registro?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Cachorro: </strong> {{ $content->name }} <br>
        <strong>Raça: </strong> {{ $content->raca->name }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{ route('dogs.delete', $content->id) }}" class="btn btn-danger">SIM, REMOVER ESTE CONTEÚDO</a>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>