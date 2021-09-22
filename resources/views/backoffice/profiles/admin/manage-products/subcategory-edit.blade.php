@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')

<a href="{{ URL::previous() }}"
    class="btn btn-sm btn-outline-dark my-2  d-inline-block ff-PT-Sans">
    go back
</a>
<h1 class="fs-1 mt-1 text-capitalize">Edit subcategory {{ $subcategory->id  }}</h1>

<form method="POST"
 action="{{ route('admin-subcategory-update', ['id'=> $subcategory->id , 'language' => App::getLocale()]) }}"
class="row g-3 row-cols-1 row-cols-md-6 needs-validation mt-md-3" novalidate>
 @csrf
@method('PUT')
  <div class="col">
      <label for="validationCustom01" class="form-label">English name</label>
    <img src="{{asset('storage/img/flag/en.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="enname" value="{{ $subcategory->enname }}" required>
    <input type="hidden" class="form-control mb-2" name="enslug" value="{{ Str::slug($subcategory->enname) }}" >
     <label for="validationCustom01" class="form-label">English description</label>
    <textarea name="endescription"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">French name</label>
    <img src="{{asset('storage/img/flag/fr.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="frname" value="{{ $subcategory->frname }}" required>
    <input type="hidden" class="form-control mb-2" name="frslug" value="{{ Str::slug($subcategory->frname) }}" >
    <label for="validationCustom01" class="form-label">French description</label>
    <textarea name="frdescription"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Arabic name</label>
    <img src="{{asset('storage/img/flag/ar.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="arname" value="{{ $subcategory->arname }}" required>
    <input type="hidden" class="form-control mb-2" name="arslug" value="{{ Str::slug($subcategory->arname) }}" >
    <label for="validationCustom01" class="form-label">Arabic description</label>
    <textarea name="ardescription"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
    <label for="validationCustom01" class="form-label">Spanish name</label>
    <img src="{{asset('storage/img/flag/es.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="esname" value="{{ $subcategory->esname }}" required>
    <input type="hidden" class="form-control mb-2" name="esslug" value="{{ Str::slug($subcategory->esname) }}" >
    <label for="validationCustom01" class="form-label">Spanish description</label>
    <textarea name="esdescription"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Italian name</label>
    <img src="{{asset('storage/img/flag/it.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="itname" value="{{ $subcategory->itname }}" required>
    <input type="hidden" class="form-control mb-2" name="itslug" value="{{ Str::slug($subcategory->itname) }}" >
    <label for="validationCustom01" class="form-label">Italian description</label>
    <textarea name="itdescription"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Deutsh name</label>
    <img src="{{asset('storage/img/flag/de.png')}}" height="27" class="ms-1" alt="">
     <input type="text" class="form-control mb-2" name="dename" value="{{ $subcategory->dename }}" required>
    <input type="hidden" class="form-control mb-2" name="deslug" value="{{ Str::slug($subcategory->dename) }}" >
    <label for="validationCustom01" class="form-label">Deutsh description</label>
    <textarea name="dedescription"  class="mb-3 form-control" rows="2"></textarea>
  </div>

   <div class="col ">
    <select class="form-select form-select-sm" name="category_id" aria-label=".form-select-sm example">
        <option selected>Categories</option>
        @foreach ($categories as $category)
             <option value="{{$category->id}}">{{$category->enname}}</option>
        @endforeach
    </select>
  </div>

  <div class="col col-md-12">
    <button type="submit" class="btn btn-primary">Update SubCategory</button>
  </div>

</form>

@endsection
