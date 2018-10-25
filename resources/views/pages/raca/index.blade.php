@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
  <h1>Raças</h1>
@stop

@include('pages.raca._create')

@section('content')
  <div class="box">
    <div class="box-header">
      <button type="button" class="btn btn-success rounded-0" data-toggle="modal" data-target="#add">
        <i class="fa fa-plus"></i> Adicionar nova raça
      </button>
    </div>
    <div class="box-body">

      <table id="datatables" class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col" class="text-center">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
          <tr>
            <td>{{ $content->name }}</td>
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
          @include('pages.raca._edit')
          @include('pages.raca._delete')
        @endforeach

        </tbody>
      </table>


    </div>
  </div>
@stop