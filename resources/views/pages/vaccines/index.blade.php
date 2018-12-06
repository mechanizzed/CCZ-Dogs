@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
  <h1>{{ $dog->name }} - Vacinas</h1>
@stop

@include('pages.vaccines._create')

@section('content')
  <div class="box">
    <div class="box-header">
      <a class="btn btn-info btn-sm" href="{{ route('dogs.index') }}">
        <i class="fa fa-undo-alt"></i> Voltar para registros
      </a>
      <br>
      <button type="button" class="btn btn-success rounded-0 mt-3" data-toggle="modal" data-target="#add">
        <i class="fa fa-plus"></i> Adicionar nova vacina
      </button>
    </div>
    <div class="box-body">

      <table id="datatables" class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Título</th>
          <th scope="col" class="text-center">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dog->vaccines as $content)
          <tr>
            <td>
              <strong>{{ date('d/m/Y', strtotime($content->data)) }}</strong> <br>
              <small class="text-secondary">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $content->data)->diffForHumans() }}</small>
            </td>
            <td>{{ $content->title }}</td>
            <td>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-warning rounded-0 mr-3" data-toggle="modal"
                        data-target="#edit_{{ $content->id }}">
                  <i class="fa fa-edit"></i> Editar
                </button>
                <button type="submit" class="btn btn-danger rounded-0" data-toggle="modal"
                        data-target="#delete_{{ $content->id }}">
                  <i class="fa fa-trash"></i> Deletar
                </button>
              </div>
            </td>
          </tr>
          @include('pages.vaccines._edit')
          @include('pages.vaccines._delete')
        @endforeach

        </tbody>
      </table>


    </div>
  </div>
@stop