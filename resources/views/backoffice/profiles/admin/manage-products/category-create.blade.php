@extends('backoffice.profiles.admin.admin')


@section('right-side-content-admin')

<a href="{{ URL::previous() }}"
    class="btn btn-sm btn-outline-dark my-2  d-inline-block ff-PT-Sans">
    go back
</a>
<h1 class="fs-3 mt-1 text-capitalize">create one category </h1>

<form  method="POST" action="{{ route('admin-category-store', App::getLocale()) }}" class="row g-3 row-cols-1 row-cols-md-6 needs-validation mt-md-3" novalidate>

  @csrf

    <div class="col">
      <label for="validationCustom01" class="form-label">English name</label>
    <img src="{{asset('storage/img/flag/en.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2  @error('enname') 'is-invalid' @enderror "
    name="enname"  value="{{ old('enname')  }}" required>
     @error('enname')<span class="form-text text-danger small">{{$message}}</span> @enderror
     <label for="validationCustom01" class="form-label">English description</label>
    <textarea name="endescription"  class="mb-3 form-control" rows="7">

    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">French name</label>
    <img src="{{asset('storage/img/flag/fr.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2  @error('frname') 'is-invalid' @enderror " name="frname"
      value="{{ old('frname')  }}" required>
     @error('frname')<span class="form-text text-danger small">{{$message}}</span> @enderror
    <label for="validationCustom01" class="form-label">French description</label>
    <textarea name="frdescription"  class="mb-3 form-control" rows="7">

    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Arabic name</label>
    <img src="{{asset('storage/img/flag/ar.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2  @error('arname') 'is-invalid' @enderror "
     name="arname"  value="{{ old('arname')  }}" required>
     @error('arname')<span class="form-text text-danger small">{{$message}}</span> @enderror
    <label for="validationCustom01" class="form-label">Arabic description</label>
    <textarea name="ardescription"  class="mb-3 form-control" rows="7">

    </textarea>
  </div>

  <div class="col">
    <label for="validationCustom01" class="form-label">Spanish name</label>
    <img src="{{asset('storage/img/flag/es.png')}}" height="27" class="ms-1" alt="">
   <input type="text" class="form-control mb-2  @error('esname') 'is-invalid' @enderror "
   name="esname"  value="{{ old('esname')  }}" required>
     @error('esname')<span class="form-text text-danger small">{{$message}}</span> @enderror
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Spanish description</label>
    <textarea name="esdescription"  class="mb-3 form-control" rows="7">

    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Italian name</label>
    <img src="{{asset('storage/img/flag/it.png')}}" height="27" class="ms-1" alt="">
    <input type="text" class="form-control mb-2  @error('itname') 'is-invalid' @enderror "
     name="itname"  value="{{ old('itname')  }}" required>
     @error('itname')<span class="form-text text-danger small">{{$message}}</span> @enderror
    <div class="valid-feedback"> Looks good! </div>
    <label for="validationCustom01" class="form-label">Italian description</label>
    <textarea name="itdescription"  class="mb-3 form-control" rows="7">

    </textarea>
  </div>

  <div class="col">
      <label for="validationCustom01" class="form-label">Deutsh name</label>
    <img src="{{asset('storage/img/flag/de.png')}}" height="27" class="ms-1" alt="">
   <input type="text" class="form-control mb-2  @error('dename') 'is-invalid' @enderror " name="dename"
    value="{{ old('dename')  }}" required>
     @error('dename')<span class="form-text text-danger small">{{$message}}</span> @enderror
    <label for="validationCustom01" class="form-label">Deutsh description</label>
    <textarea name="dedescription"  class="mb-3 form-control" rows="7">

    </textarea>
  </div>



  <div class="col col-md-12 ">
    <button type="submit" class="btn btn-primary">Store Category</button>
  </div>

</form>

@endsection
