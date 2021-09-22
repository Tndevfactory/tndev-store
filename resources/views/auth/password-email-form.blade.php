@extends('layout.app')

@section('title')
    <title>Shopping-tn | send reset link</title>
@endsection

@section('content')
 <aside>
        <x-offcanvas/>
    </aside>


    <div class="container my-3">

        @if ( session()->get('email'))
            <div class="div bg-danger fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('email')}}</span>
            </div>
        @endif

        @if ( session()->get('status'))
            <div class="div bg-success fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('status')}}</span>
            </div>
        @endif


        <form action="{{ route('password.email',  App::getLocale() ) }}" method="POST" class="col-md-6 mx-auto border border-1 p-3 shadow-sm">
            @csrf
             <div class="mb-3">
                <label for="email" class="form-label fs-5 ">Email</label>
                <input type="hidden" name="language" value="{{ App::getLocale() }}">
                <input type="email" value="{{ old('email')  }}"
                        class="form-control  @error('email') 'is-invalid' @enderror "
                        name="email">
                @error('email')
                <span class="form-text text-danger small">{{$message}}</span>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">send reset link</button>
        </form>
    </div>



@endsection
