<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new page for Special Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'special.store', 'method' => 'post', 'files' => true]) !!}
        <div class="row">
          <div class="col-lg-9">
            @include('pages.special._form')
          </div>
          <div class="col-lg-3">
            {!! Form::label('image', 'Main image') !!} <br>
            {!! Form::file('file', ['id' => 'profile-img', 'required']) !!}
            <div class="jumbotron">
              <img src="" id="profile-img-tag" width="100%" style="display: none;"/>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>