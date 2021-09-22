@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')

<h1>manage blogs view</h1>

<a href="{{ route('admin-blog-create-view', App::getLocale()) }}"
    class="btn btn-sm btn-primary my-2  d-inline-block ff-PT-Sans">
    Create new blog
</a>

<div class="row header bg-light shadow-sm mb-3 p-2  text-uppercase ff-PT-Sans">
    <div class="col d-none d-md-block">
         <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">image</button>
    </div>
    <div class="col">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">name</button>
    </div>

    <div class="col  d-none d-md-block">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">description </button>
    </div>
    <div class="col  ">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">created</button>
    </div>
    <div class="col">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">Edit / Delete</button>
    </div>
</div>
@foreach ( $blogs as $blog)

<div class="row body bg-white shadow-sm mb-3 p-2">
    <div class="col  d-none d-md-block">
        <img src="{{ asset($blog->thumbnail_h300) }}" height="70" alt="">
    </div>
    <div class="col">
       <p class="small">{{ $blog->enname }}</p>
    </div>

    <div class="col  d-none d-md-block">
       <p class="small">{{ Str::limit($blog->endescription, 80) }}</p>
    </div>
    <div class="col ">
       <p class="small">{{ $blog->created_at->format('d-m-Y') }}</p>
    </div>
    <div class="col">
        <a href="{{ route('admin-blog-edit-view', [App::getLocale(), $blog->id ]) }}"
            class="btn btn-sm btn-warning">
            Edit
        </a>
        <form action="" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" value="{{ $blog->id }}">
            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
@endforeach


@endsection
