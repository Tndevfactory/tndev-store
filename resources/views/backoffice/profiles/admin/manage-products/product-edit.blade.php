@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')


<a href="{{ URL::previous() }}"
    class="btn btn-sm btn-outline-dark my-2  d-inline-block ff-PT-Sans">
    go back
</a>
<h1 class="fs-3 mt-1 text-capitalize">Edit one product </h1>

<form method="POST"
 action="{{ route('admin-product-update', ['id'=> $product->id , 'language' => App::getLocale()]) }}"
 class="row g-3 row-cols-1 row-cols-md-6 needs-validation mt-md-3"
  enctype="multipart/form-data"
 novalidate>
@csrf
@method('PUT')
  <div class="col">
      <label for="validationCustom01" class="form-label">English name</label>
    <img src="{{asset('storage/img/flag/en.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="enname" value="{{ $product->enname }}" required>
     <label for="validationCustom01" class="form-label">English description</label>
    <textarea name="endescription"  class="mb-3 form-control" rows="2">
        {{ $product->endescription }}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">French name</label>
    <img src="{{asset('storage/img/flag/fr.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="frname" value="{{ $product->frname }}" required>
    <label for="validationCustom01" class="form-label">French description</label>
    <textarea name="frdescription"  class="mb-3 form-control" rows="2">
        {{ $product->frdescription }}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Arabic name</label>
    <img src="{{asset('storage/img/flag/ar.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="arname" value="{{ $product->arname }}" required>
    <label for="validationCustom01" class="form-label">Arabic description</label>
    <textarea name="ardescription"  class="mb-3 form-control" rows="2">
        {{ $product->ardescription }}
    </textarea>
  </div>

  <div class="col">
    <label for="validationCustom01" class="form-label">Spanish name</label>
    <img src="{{asset('storage/img/flag/es.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="esname" value="{{ $product->esname }}" required>
    <label for="validationCustom01" class="form-label">Spanish description</label>
    <textarea name="esdescription"  class="mb-3 form-control" rows="2">
        {{ $product->esdescription }}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Italian name</label>
    <img src="{{asset('storage/img/flag/it.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="itname" value="{{ $product->itname }}" required>
    <label for="validationCustom01" class="form-label">Italian description</label>
    <textarea name="itdescription"  class="mb-3 form-control" rows="2">
        {{ $product->itdescription }}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Deutsh name</label>
    <img src="{{asset('storage/img/flag/de.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="dename" value="{{ $product->dename }}" required>
    <label for="validationCustom01" class="form-label">Deutsh description</label>
    <textarea name="dedescription"  class="mb-3 form-control" rows="2">
        {{ $product->dedescription }}
    </textarea>
  </div>

  <div class="col ">
    <select class="form-select form-select-sm" name="sub_category_id" aria-label=".form-select-sm example">
        <option selected>Sub categories</option>
        @foreach ($subcategories as $subcategory)
             <option value="{{$subcategory->id}}">{{$subcategory->enname}}</option>
        @endforeach
    </select>
  </div>
 <div class="col ">
    <div class="form-image">
          <label for="validationCustom01" class="form-label">Upload image</label>
          <input type="file" name="image"  class=" text-dark bg-light">
          @error('image')<span class="form-text text-danger small">{{$message}}</span> @enderror
    </div>
  </div>
  <div class="col col-md-12">
    <button type="submit" class="btn btn-primary">Update Product</button>
  </div>

</form>

@endsection
