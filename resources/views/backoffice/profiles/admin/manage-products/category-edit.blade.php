@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')
<a href="{{ URL::previous() }}"
    class="btn btn-sm btn-outline-dark my-2  d-inline-block ff-PT-Sans">
    go back
</a>
<h1 class="fs-3 mt-1 text-capitalize">Edit one category </h1>

 <form method="POST"
 action="{{ route('admin-category-update', ['id'=> $category->id , 'language' => App::getLocale()]) }}"
 class="row g-3 row-cols-1 row-cols-md-6 needs-validation mt-md-3" novalidate>
        @csrf
        @method('PUT')

  <div class="col">
      <label for="validationCustom01" class="form-label">English name</label>
    <img src="{{asset('storage/img/flag/en.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="enname" value="{{ $category->enname }}" required>
    <input type="hidden" class="form-control mb-2" name="enslug" value="{{ Str::slug($category->enname) }}" >

     <label for="validationCustom01" class="form-label">English description</label>
    <textarea name="endescription"  class="mb-3 form-control" rows="7">
        {{ $category->endescription}}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">French name</label>
    <img src="{{asset('storage/img/flag/fr.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="frname" value="{{ $category->frname }}" required>
    <input type="hidden" class="form-control mb-2" name="frslug" value="{{ Str::slug($category->frname) }}" >
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">French description</label>
    <textarea name="frdescription"  class="mb-3 form-control" rows="7">
         {{ $category->frdescription}}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Arabic name</label>
    <img src="{{asset('storage/img/flag/ar.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="arname" value="{{ $category->arname }}" required>
    <input type="hidden" class="form-control mb-2" name="arslug" value="{{ Str::slug($category->arname) }}" >
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Arabic description</label>
    <textarea name="ardescription"  class="mb-3 form-control" rows="7">
         {{ $category->ardescription}}
    </textarea>
  </div>

  <div class="col">
    <label for="validationCustom01" class="form-label">Spanish name</label>
    <img src="{{asset('storage/img/flag/es.png')}}" height="27" class="ms-1" alt="">
   <input type="text" class="form-control mb-2" name="esname" value="{{ $category->esname }}" required>
    <input type="hidden" class="form-control mb-2" name="esslug" value="{{ Str::slug($category->esname) }}" >
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Spanish description</label>
    <textarea name="esdescription"  class="mb-3 form-control" rows="7">
         {{ $category->esdescription}}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Italian name</label>
    <img src="{{asset('storage/img/flag/it.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" name="itname" value="{{ $category->itname }}" required>
    <input type="hidden" class="form-control mb-2" name="itslug" value="{{ Str::slug($category->itname) }}" >
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Italian description</label>
    <textarea name="itdescription"  class="mb-3 form-control" rows="7">
         {{ $category->itdescription}}
    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Deutsh name</label>
    <img src="{{asset('storage/img/flag/de.png')}}" height="27" class="ms-1" alt="">
   <input type="text" class="form-control mb-2" name="dename" value="{{ $category->dename }}" required>
    <input type="hidden" class="form-control mb-2" name="deslug" value="{{ Str::slug($category->dename) }}" >
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Deutsh description</label>
    <textarea name="dedescription"  class="mb-3 form-control" rows="7">
         {{ $category->dedescription}}
    </textarea>
  </div>

  <div class="col ">
    <button type="submit" class="btn btn-primary">Update Category</button>
  </div>

</form>


@endsection
