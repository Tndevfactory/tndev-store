@php
               $lang = Request()->language;
               $path = Request()->path();
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
 @endphp
  <nav class="navbar navbar-expand-lg  py-3 px-2
   {{ themeDark() ? 'bg-dark  ' : '' }}  " id="navigation">

    <div class="container-fluid ">



            <div class="  brand-me8nu d-flex justify-content-center align-items-center">
                <div class="mt-1">
                <x-offcanvas-button/>
                </div>

                <a class="navbar-brand" href="{{route('welcome', [ 'language' => App::getLocale() ])}}">
                <span class="title-brand ms-1 {{ themeDark() ? 'text-primary' : '' }}" >
                    Tn Dev
                    <i class="fas fa-laptop-code"></i>
                </span>
                </a>
            </div>

            <div class=" mobile d-md-none gap-0 d-flex justify-content-center align-items-center">

                {{-- <div class=" d-none {{

                    $path === $lang.'/blogs'
                        || $path === $lang.'/blog-detail'
                        || $path === $lang.'/about'

                    ? 'd-none': ''  }}">

                    <x-cart/>

                </div> --}}

                    <x-lang-switcher :lang="Request()->language" />


                        @auth
                            <x-auth-menu/>
                        @endauth


            </div>


            <div class="  collapse navbar-collapse " id="navbarNav">

                <div class="px-4 flex-grow-1 d-flex justify-content-center">

                    <ul class="navbar-nav mx-auto mb-0">

                        <li class="nav-item">
                        <a class="nav-link    {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Roboto-Condensed' }}  "
                        aria-current="page" href="{{ route('welcome', App::getLocale()) }}"
                        style="font-size: 1.5rem; {{ $path === $lang ? 'color: #7e1c5d;border-bottom: #7e1c5d 1px solid;': 'color: #0C537A;'}} ">
                            {{ __('Agency') }}
                        </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link   {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Roboto-Condensed' }} " href="{{ route('blogs', App::getLocale()) }}"
                        style="font-size: 1.5rem;{{ $path === $lang.'/blogs' ? 'color: #7e1c5d;border-bottom: #7e1c5d 1px solid;': 'color: #0C537A;'}}">
                        {{ __('Blog') }}
                        </a>
                        </li>

                        <li class="nav-item ">
                        <a class="nav-link   {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Roboto-Condensed' }} " href="{{ route('about', App::getLocale()) }}"
                        style="font-size: 1.5rem;{{ $path === $lang.'/about' ? 'color: #7e1c5d;border-bottom: #7e1c5d 1px solid;': 'color: #0C537A;'}}">
                            {{ __('About') }}
                        </a>
                        </li>

                    </ul>

                </div>



                <div class="ms-auto d-flex justify-content-between px-2 ">
                        <div class=" d-none
                        {{
                        $path === $lang.'/blogs'
                        || $path === $lang.'/blog-detail'
                        || $path === $lang.'/about'

                        ? 'd-none': ''

                        }}">
                            <x-cart/>

                    </div>

                        <x-lang-switcher :lang="Request()->language" />
                        <x-theme-switcher/>


                        <div class="auth   d-flex justify-content-center align-items-center">
                            @guest
                                    <a href="{{ route('login', App::getLocale())}}"
                                    class=" sign-in btn  me-2 btn-sm  d-flex justify-content-center align-items-center
                                    {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Roboto-Condensed' }} ">
                                        {{ __('Sign in') }}
                                    </a>
                                    <a href="{{ route('register-form', App::getLocale())}}"
                                    class=" sign-up btn  btn-sm  d-flex justify-content-center align-items-center
                                    {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Roboto-Condensed' }} ">
                                        {{ __('Sign up') }}
                                    </a>
                            @endguest


                        </div>

                            @auth
                                <x-auth-menu/>
                            @endauth

                </div>
            </div>



    </div>
  </nav>
