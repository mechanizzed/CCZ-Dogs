@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
  <h1>Specials
    <small> Pages</small>
  </h1>
@stop

@include('pages.special._create')

@section('content')
  <div class="box">
    <div class="box-header">
      <button type="button" class="btn btn-success rounded-0" data-toggle="modal" data-target="#add">
        <i class="fa fa-plus"></i> Add new page
      </button>
    </div>
    <div class="box-body">

      <table id="datatables" class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Main Image</th>
          <th scope="col">Title</th>
          <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
          <tr>
            <th scope="row">{{ $content->id }}</th>
            <td>
              <div data-toggle="modal" data-target="#image_{{ $content->id }}" style="cursor: pointer;">
                <img src="{{ asset('uploads/special/'.$content->file) }}" width="180" class="img-thumbnail">
              </div>
            </td>
            <td>{{ $content->title }}</td>
            <td>
              <div class="row">
                <div class="col-lg-6 text-right">
                  <button type="button" class="btn btn-warning rounded-0" data-toggle="modal"
                          data-target="#edit_{{ $content->id }}">
                    <i class="fa fa-edit"></i> Edit
                  </button>
                </div>
                <div class="col-lg-6 text-left">
                  <button type="submit" class="btn btn-danger rounded-0" data-toggle="modal"
                          data-target="#delete_{{ $content->id }}">
                    <i class="fa fa-trash"></i> Delete
                  </button>
                </div>
              </div>
            </td>
          </tr>
          @include('pages.special._edit')
          @include('pages.special._delete')
          @include('pages.special._main_image')
        @endforeach

        </tbody>
      </table>


    </div>
  </div>
@stop