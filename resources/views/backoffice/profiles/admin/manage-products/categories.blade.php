@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')

<h1>manage categories view</h1>

@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

<a href="{{ route('admin-category-create-view', App::getLocale()) }}"
    class="btn btn-sm btn-primary my-2  d-inline-block ff-PT-Sans">
    Create new category
</a>

<div class="row header bg-light shadow-sm mb-3 p-2  text-uppercase ff-PT-Sans">
    <div class="col d-none d-md-block">
         <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">image</button>
    </div>
    <div class="col  d-none d-md-block">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">category-id</button>
    </div>
    <div class="col">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">name</button>
    </div>

    <div class="col col-md-3 d-none d-md-block">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">description </button>
    </div>


    <div class="col  ">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">created</button>
    </div>
    <div class="col">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">Edit / Delete</button>
    </div>
</div>
@foreach ( $categories as $category )

<div class="row body bg-white shadow-sm mb-3 p-2">
    <div class="col  d-none d-md-block">
        <img src="{{ asset($category->thumbnail_h300) }}" height="70" alt="">
    </div>
    <div class="col d-none d-md-block">
       <p class="small">{{ $category->id }}</p>
    </div>
    <div class="col">
       <p class="small">{{ $category->enname }}</p>
    </div>

    <div class="col  col-md-3 d-none d-md-block">
       <p class="small">{{ Str::limit($category->endescription, 80) }}</p>
    </div>

    <div class="col ">
       <p class="small">{{ $category->created_at->format('d-m-Y') }}</p>
    </div>

    <div class="col">
        <a href="{{ route('admin-category-edit-view',
         ['id'=>$category->id ,'language'=> App::getLocale() ]) }}"
            class="btn btn-sm btn-warning">
            Edit
        </a>
        <form
        action="{{ route('admin-category-delete',['id'=>$category->id ,'language'=> App::getLocale()])}}"
         method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $category->id }}">
            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
@endforeach


@endsection
