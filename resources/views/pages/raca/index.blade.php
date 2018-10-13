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
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contents as $content)
        <tr>
          <td>{{ $content->name }}</td>
          <td>
            <div class="row">
              <div class="col-lg-6 text-right">
                <button type="button" class="btn btn-warning rounded-0" data-toggle="modal" data-target="#edit_{{ $content->id }}">
                  <i class="fa fa-edit"></i> Edit
                </button>
              </div>
              <div class="col-lg-6 text-left">
                <button type="submit" class="btn btn-danger rounded-0" data-toggle="modal" data-target="#delete_{{ $content->id }}">
                  <i class="fa fa-trash"></i> Delete
                </button>
              </div>
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