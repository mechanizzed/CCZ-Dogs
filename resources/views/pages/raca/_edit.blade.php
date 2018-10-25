<!-- Modal -->
<div class="modal fade" id="edit_{{ $content->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atualizar: {{ $content->name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::model($content, ['route' => ['raca.update', $content->id] , 'method' => 'put']) !!}
        @include('pages.raca._form')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-info">Update</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>