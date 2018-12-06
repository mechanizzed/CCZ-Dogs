@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
  <h1>Dogs</h1>
@stop

@include('pages.dogs._create')

@section('content')
  <div class="box">
    <div class="box-header">
      <button type="button" class="btn btn-success rounded-0" data-toggle="modal" data-target="#add">
        <i class="fa fa-plus"></i> Adicionar novo cachorro
      </button>
    </div>
    <div class="box-body">

      <table id="datatables" class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th scope="col">Foto principal</th>
          <th scope="col">Nome</th>
          <th scope="col">Fotos</th>
          <th scope="col">Vacinas</th>
          <th scope="col">Anotações</th>
          <th scope="col" class="text-center">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
          <tr>
            <td>
              @if($content->file !== null)
                <div data-toggle="modal" data-target="#image_{{ $content->id }}" style="cursor: pointer;">
                  <img src="{{ asset('uploads/dogs/'.$content->file) }}" width="140" class="img-thumbnail">
                </div>
              @else
                <div data-toggle="modal" data-target="#image_{{ $content->id }}" style="cursor: pointer;">
                  <div class="img-thumbnail d-flex justify-content-center align-items-center" style="width: 140px;">
                    <i class="fas fa-dog fa-2x"></i>
                  </div>
                </div>
              @endif
            </td>
            <td>{{ $content->name }}</td>
            <td>
              <a href="" class="btn btn-primary rounded-0">
                <i class="fa fa-photo"></i> Imagens
              </a>
            </td>
            <td>
              <a href="{{ route('vaccines.index', $content->id) }}" class="btn btn-info rounded-0">
                <i class="fa fa-syringe"></i> Vacinas
              </a> <br>
              @if( count($content->vaccines) !== 0)
                <small class="text-secondary">Cadastradas: {{ count($content->vaccines) }}</small>
              @else
                <small class="text-secondary">Nenhuma vacina cadastrada</small>
              @endif
            </td>
            <td>Anotações</td>
            <td>

              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-warning mr-3 rounded-0" data-toggle="modal"
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
          @include('pages.dogs._edit')
          @include('pages.dogs._delete')
          @include('pages.dogs._main_image')
        @endforeach

        </tbody>
      </table>


    </div>
  </div>
@stop