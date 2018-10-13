<!-- Modal -->
<div class="modal fade" id="delete_{{ $content->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this content?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Testimonial title: </strong> {{ $content->title }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{ route('testmonials.delete', $content->id) }}" class="btn btn-danger">YES, REMOVE THIS CONTENT</a>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>