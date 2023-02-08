@extends('layouts.admin')
@section('title', 'Edit Category')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit categories</h3>
    </div>
    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT', 'files' => true]) !!}
    <div class="card-body">
        @include('admin.categories.form.form')
    </div>
    <div class="card-footer">
        <a href="{{route('categories.index')}}" class="btn btn-danger float-right">
            Cancel
        </a>
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
</div>
@endsection
