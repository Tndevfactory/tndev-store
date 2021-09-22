@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')

<a href="{{ URL::previous() }}"
    class="btn btn-sm btn-outline-dark my-2  d-inline-block ff-PT-Sans">
    go back
</a>
<h1 class="fs-3 mt-1 text-capitalize">create one blog </h1>

<form class="row g-3 row-cols-1 row-cols-md-6 needs-validation mt-md-3" novalidate>

  <div class="col">
      <label for="validationCustom01" class="form-label">English name</label>
    <img src="{{asset('storage/img/flag/en.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback"> Looks good! </div>
     <label for="validationCustom01" class="form-label">English description</label>
    <textarea name="description"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">French name</label>
    <img src="{{asset('storage/img/flag/fr.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">French description</label>
    <textarea name="description"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Arabic name</label>
    <img src="{{asset('storage/img/flag/ar.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Arabic description</label>
    <textarea name="description"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
    <label for="validationCustom01" class="form-label">Spanish name</label>
    <img src="{{asset('storage/img/flag/es.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Spanish description</label>
    <textarea name="description"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Italian name</label>
    <img src="{{asset('storage/img/flag/it.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Italian description</label>
    <textarea name="description"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Deutsh name</label>
    <img src="{{asset('storage/img/flag/de.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Deutsh description</label>
    <textarea name="description"  class="mb-3 form-control" rows="2"></textarea>
  </div>

  <div class="col ">
    <button type="submit" class="btn btn-primary">Store Category</button>
  </div>

</form>

@endsection
