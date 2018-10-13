@extends('adminlte::page')
@section('title', 'Altear password')

@section('content_header')
<h1 class="text-info"><i class="fa fa-lock"></i> Perfil <small>Altear password</small></h1>
@stop



@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title text-info"><i class="fa fa-pencil"></i> Altear password</h3>
	</div>
	<div class="box-body">

		{!! Form::open(['route' => 'user.password.update', 'method' => 'put']) !!}

		<div class="row">

			<div class="form-group col-lg-6">
				{!! Form::label('password', 'Novo password') !!}
				{!! Form::password('password', ['class' => 'form-control', 'required']) !!}
			</div>

			<div class="form-group col-lg-6">
				{!! Form::label('password_confirmation', 'Confirmar password') !!}
				{!! Form::password('password_confirmation', ['class' => 'form-control', 'required']) !!}
			</div>


		</div>
	</div>

	<div class="box-footer with-border">
		<button type="submit" class="btn btn-info">Update</button>
		{!! Form::close() !!}
	</div>
</div>
@stop