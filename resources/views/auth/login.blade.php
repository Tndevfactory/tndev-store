@extends('layout.app')

@section('title')
    <title>Tndev | Connection</title>
@endsection

@section('content')

 <aside>
        <x-offcanvas/>
    </aside>

    <div class="container my-3">


        @if ( session()->get('message'))
            <div class="div bg-danger fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('message')}}</span>
            </div>
        @endif

        {{-- reset password link session --}}
        @if ( session()->get('status'))
            <div class="div bg-success fs-3 text-white p-2 text-center">
                <span class="text-white">{{ session()->get('status')}}</span>
            </div>
        @endif
        {{-- end reset password link session --}}

        <div class="row g-0 row-cols-1 row-cols-md-2 mt-5 mt-md-0" id="login-form">

            <div class="col d-none d-md-block">
                <div class="img ">
                    <img src="https://picsum.photos/700/600" 
                         class="img-fluid d-block w-100" alt="">
                    {{-- <img src="{{ asset('storage/img/users/chiheb.jpg') }}"
                         class="img-fluid" alt=""> --}}
                </div>
            </div>
            <div class="col card border border-md-start-0 " >
                <div class="form  p-md-5   mt-md-1">
                    <form action="{{route('auth-login', App::getLocale())}}"
                    method="POST" class=" text-dark p-2 mt-1">
                        @csrf
                        <span class="text-center fs-md-1 fs-4 d-block mb-2 fw-bold"
                              style="color:#052c2e">
                            {{ __('Sign in form') }}
                        </span>
                        <div class="mb-1 ">
                            <label for="email" class="form-label fs-6 "> {{ __('Email') }}</label>
                            <input type="email" value="{{ old('email')  }}"
                                   class="form-control  @error('email') 'is-invalid' @enderror "
                                   name="email">
                            @error('email')
                            <span class="form-text text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label for="password" class="form-label fs-6">{{ __('Password') }} </label>
                                 <a href="{{ route('password.request', App::getLocale()) }}"
                                 class="text-decoration-none text-primary"> {{ __('forget password') }}</a>
                            </div>

                            <input type="password" class="form-control @error('password') 'is-invalid' @enderror"
                                   name="password">
                            @error('password')
                            <span class="form-text text-danger small">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row pt-3 ">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary ">{{ __('Sign in') }}</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center ">
                                <a href="{{route('register-form', App::getLocale())}}"
                                class="btn btn-default fs-6 text-secondary mt-3">
                                     {{ __('You don\'t have an account, please') }}
                                    <span class=" text-primary fw-bold ">{{ __('Sign up') }}</span>
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class="text-center text-muted ">{{ __('or use') }}</div>
                    {{-- <div class="border border-top border-1 border-dark-50"></div> --}}

                    <div class="d--flex justify-content-center align-items-center gap-2 mt-4">
                       {{-- <span class="h5 text-muted">Se connecter avec</span>--}}

                        <a href="{{ route('socialite.redirect', [ 'language' => App::getLocale(), 'provider' => 'google']) }}"
                         title="Connecter avec Google"
                           class="btn btn-danger d-flex justify-content-center align-items-center">
                           google<i class="fab fa-google-plus-square  ms-2"></i>
                        </a>

                        {{-- <a href="{{ route('socialite.redirect', 'facebook') }}" title="Connexion avec Facebook"
                          class="btn btn-primary d-flex justify-content-center align-items-center">
                           facebook
                           <i class="fab fa-facebook-square ms-2 "></i>
                        </a>

                        <a href="{{ route('socialite.redirect', 'github') }}" title="Connecter avec Github"
                           class="btn btn-dark d-flex justify-content-center align-items-center ">
                           github<i class="fab fa-github-square ms-2 "></i>
                              </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
