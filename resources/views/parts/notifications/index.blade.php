@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if (session('success'))
<div class="alert p-3 mb-2 bg-info text-white">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<i class="fa fa-check"></i> {{ session('success') }}
</div>
@endif
