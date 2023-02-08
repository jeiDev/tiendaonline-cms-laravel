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
            <a type="button" class="btn btn-tool" href="{{route('categories.create')}}">
                <h3 class="card-title">Add <i class="fas fa-plus"></i></h3>
            </a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">

        <ul class="nav nav-tabs">
            @foreach (getModulesArray() as $module => $item)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories.module', $module)}}">
                        {{$item}}
                    </a>
                </li>
            @endforeach
        </ul>

        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{$category->id}}</td>
                    <td>{{$category->name}}</td>
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
        {{$categories->render()}}
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
</div>
@endsection
