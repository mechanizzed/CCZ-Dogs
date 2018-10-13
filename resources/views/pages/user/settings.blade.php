@extends('adminlte::page')
@section('title', 'Altear valores')

@section('content_header')
<h1 class="text-info"><i class="fa fa-user"></i> Perfil <small>Alterar valores do perfil</small></h1>
@stop


@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title text-info"><i class="fa fa-pencil"></i> Altear valores</h3>
	</div>
	<div class="box-body">

		{!! Form::open(['route' => 'user.settings.update', 'method' => 'put']) !!}

		<div class="row">
			<div class="col-lg-6">
				<div class="row">
					<div class="form-group col-lg-6">
						{!! Form::label('email', 'Email (Você não pode altear seu e-mail)') !!}
						{!! Form::text('email', $user->email, ['class' => 'form-control disabled', 'disabled']) !!}
					</div>

					<div class="form-group col-lg-6">
						{!! Form::label('name', 'Full name') !!}
						{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Digite seu nome completo']) !!}
					</div>

					<div class="form-group col-lg-12">
						{!! Form::label('date', 'Date of birth') !!}
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-calendar"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Data de nascimento" id="datepicker">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-group">
					{!! Form::label('body', 'Description') !!}
					{!! Form::textarea('body', $user->body, ['class' => 'form-control', 'rows' => 5]) !!}
				</div>
			</div>

		</div>
	</div>

	<div class="box-footer with-border">
		<button type="submit" class="btn btn-info"> Update</button>
		{!! Form::close() !!}
	</div>
</div>
@stop