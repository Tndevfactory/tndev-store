@extends('layout.app')

@section('title')
    <title>Shopping-tn | Inscription</title>
@endsection

@section('content')

 <aside>
        <x-offcanvas/>
    </aside>

<div class="container my-3">


    <div class="div">
        {{ session()->get('message')}}
    </div>


    <div class="row g-0 row-cols-1 row-cols-md-2" id="register-form">

        <div class="col d-none d-md-block">
            <div class="img ">
              <img src="https://picsum.photos/700/600"
                         class="img-fluid d-block w-100" alt="">
                    {{-- <img src="{{ asset('storage/img/users/chiheb.jpg') }}"
                         class="img-fluid" alt=""> --}}
            </div>
        </div>

        <div class="col  border border-md-start-0 card p-2">
            <div class="form px-md-5">


                    <form action="{{route('auth-register', App::getLocale())}}" method="POST" class="text-dark  ">

                        @csrf
                        <span class="text-center fs-4 d-block  fw-bold" style="color:#052c2e">
                            {{ __('Sign up form') }}</span>

                        <div class="mb-3">
                            <label for="name" class="form-label fs-6">{{ __('Name') }}</label>
                            <input type="text" value="{{ old('name') ?? '' }}" class="form-control
                            @error('name') 'is-invalid' @enderror "  name="name">
                            @error('name')
                                 <span class="form-text text-danger small">{{$message}}.</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fs-6">{{ __('Email') }}</label>
                            <input type="email" value="{{ old('email') ?? '' }}" class="form-control  @error('email') 'is-invalid' @enderror "  name="email">
                            @error('email')
                                 <span class="form-text text-danger small">{{$message}}.</span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fs-6">{{ __('Password') }}</label>
                            <input type="password"  class="form-control @error('email') 'is-invalid' @enderror" name="password" >
                            @error('password')
                                <span class="form-text text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fs-6">{{ __('Password confirmation') }}</label>
                            <input type="password"  class="form-control @error('password_confirmation') 'is-invalid' @enderror"
                            name="password_confirmation" >
                            @error('password_confirmation')
                                <span class="form-text text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row  ">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">{{ __('Sign up') }}</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                 <a href="{{route('login', App::getLocale())}}"
                                 class="btn btn-default fs-6 text-muted">{{ __('You already have an account') }}
                                  <span class="text-primary fw-bold ">{{ __('Sign in') }}</span>
                                </a>
                            </div>
                        </div>

                   </form>
                     <div class="text-center text-muted mb-2 ">{{ __('or use') }}</div>
                    {{-- <div class="border border-top border-1 border-dark-50"></div> --}}

                    <a href="{{ route('socialite.redirect', [ 'language' => App::getLocale(), 'provider' => 'google']) }}"
                         title="Connecter avec Google"
                           class="btn btn-danger d-flex justify-content-center align-items-center">
                           google<i class="fab fa-google-plus-square  ms-2"></i>
                        </a>
            </div>

        </div>

    </div>


</div>



@endsection
