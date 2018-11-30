<div class="modal fade" id="image_{{ $content->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atualizar imagem principal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => ['dogs.update.image', $content->id], 'method' => 'post', 'files' => true]) !!}
        <div class="col-lg-12">
          {!! Form::label('image', 'Main image') !!} <br>
          {!! Form::file('file', ['id' => 'profile-img-edit', 'required']) !!}
          <div class="jumbotron">
            <img src="" id="profile-img-tag-edit" width="100%" style="display: none;"/>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Atualizar imagem</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>