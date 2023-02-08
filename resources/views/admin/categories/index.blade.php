@extends('layouts.admin')
@section('title', 'Category management')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Section Categories</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <a class="m-2 float-right btn btn-primary" href="{{route('categories.create')}}">Create</a>
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Module</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{$category-id}}</td>
                    <td>{{$category-name}}</td>
                    <td>{{$category-module}}</td>
                    <td width="10px">
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-default">
                        <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route' => ['categories.destroy', $category->id], "method" => 'DELETE']) !!}
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-default">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
