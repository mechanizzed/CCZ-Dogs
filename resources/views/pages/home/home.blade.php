@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
  <h1>Dashboard
  </h1>
@stop


@section('content')
  <div class="box">

    <div class="box-body p-4">
      <div class="row">
        <div class="col-lg-3">
          <div class="jumbotron text-center">
            <i class="fa fa-dog fa-5x text-info"></i>
            <div class="card-body">
              <h5 class="card-title">Registro de cachorros</h5>
              <span class="text-info" style="font-size: 7.0rem; font-weight: bolder; margin: 0">{{ $dogs }}</span> <br>
              <a href="{{ route('dogs.index') }}" class="btn btn-info">Ver registros</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="jumbotron text-center">
            <i class="fa fa-list-ul fa-5x text-primary"></i>
            <div class="card-body">
              <h5 class="card-title">Registro de raças</h5>
              <span class="text-primary" style="font-size: 7.0rem; font-weight: bolder; margin: 0">{{ $racas }}</span>
              <br>
              <a href="{{ route('raca.index') }}" class="btn btn-primary">Ver raças</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop