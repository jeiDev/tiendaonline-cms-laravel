@extends('layouts.admin')
@section('title', 'Add Category')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('categories.index')}}">Categories</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Category register</h3>
    </div>
    {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="card-body">
            @include("admin.categories.form.form")
        </div>
        <div class="card-footer">
            <a href="{{route('categories.index')}}" class="btn btn-danger float-right">Cancel</a>
            <input type="submit" value="Save" class="btn btn-primary"/>
        </div>
    {!! Form::close() !!}
</div>
@endsection
