@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')

<a href="{{ route('admin-product-create-view', App::getLocale()) }}"
    class="btn btn-sm btn-primary my-2  d-inline-block ff-PT-Sans">
    Create new product
</a>
@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
<div class="row header bg-light shadow-sm mb-3 p-2  text-uppercase ff-PT-Sans">
    <div class="col d-none d-md-block">
         <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">image</button>
    </div>
    <div class="col">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">name</button>
    </div>

    <div class="col  col-md-4 d-none d-md-block">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">description </button>
    </div>

    <div class="col   d-none d-md-block">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">subcategory </button>
    </div>
    <div class="col   d-none d-md-block">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">category </button>
    </div>
    <div class="col  ">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">created</button>
    </div>
    <div class="col">
        <button class="btn btn-sm btn-default ff-PT-Sans text-uppercase">Edit / Delete</button>
    </div>
</div>
@foreach ( $products as $product )

<div class="row body bg-white shadow-sm mb-3 p-2">
    <div class="col  d-none d-md-block">
        <img src="{{ asset($product->thumbnail_h300) }}" height="70" alt="">
    </div>
    <div class="col">
       <p class="small">{{ $product->enname }}</p>
    </div>

    <div class="col col-md-4 d-none d-md-block">
       <p class="small">{{ Str::limit($product->endescription, 80) }}</p>
    </div>
    <div class="col  d-none d-md-block">
       <p class="small">{{ $product->sub_category->enname}}</p>
    </div>
    <div class="col  d-none d-md-block">
       <p class="small">{{ $subcategories[$product->sub_category->id]->category->enname }}</p>
    </div>
    <div class="col ">
       <p class="small">{{ $product->created_at->format('d-m-Y') }}</p>
    </div>
    <div class="col">
        <a href="{{ route('admin-product-edit-view', [App::getLocale(), $product->id ]) }}"
            class="btn btn-sm btn-warning">
            Edit
        </a>
        <form action="{{ route('admin-product-delete',['id'=>$product->id ,'language'=> App::getLocale()])}}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
@endforeach



@endsection
