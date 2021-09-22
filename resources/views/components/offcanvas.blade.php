@php
               $lang = Request()->language;
               $path = Request()->path();
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
 @endphp
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="navbar-brand" href="{{route('welcome', [ 'language' => App::getLocale() ])}}">
                    <span class="title-brand {{ themeDark() ? 'text-primary' : '' }}" >
                        Tn Dev
                        <i class="fas fa-laptop-code"></i>
                    </span>
                </a>
            </h5>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto menu">
                <li class="nav-item ">
                      <a class="nav-link  ff-Roboto-Condensed"
                      aria-current="page" href="{{ route('welcome', App::getLocale()) }}"
                       style="font-size: 1.5rem; {{ $path === $lang ? 'color: #7e1c5d;': 'color: #0C537A;'}} ">
                         Agency
                    </a>
                </li>

                <li class="nav-item">
                      <a class="nav-link  ff-Roboto-Condensed" href="{{ route('blogs', App::getLocale()) }}"
                       style="font-size: 1.5rem;{{ $path === $lang.'/blog' ? 'color: #7e1c5d;': 'color: #0C537A;'}}">
                       Blog
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  ff-Roboto-Condensed" href="{{ route('about', App::getLocale()) }}"
                    style="font-size: 1.5rem;{{ $path === $lang.'/about' ? 'color: #7e1c5d;': 'color: #0C537A;'}}">
                    About
                    </a>
                </li>

                <li class="nav-item d-md-none d-block">
                     <div class="auth  mb-2 d-flex gap-2">
                        @guest
                                <a href="{{ route('login', App::getLocale())}}"
                                    class=" sign-in btn btn-info me-2 btn-sm">
                                    Sign in
                                </a>
                                <a href="{{ route('register-form', App::getLocale())}}"
                                    class=" sign-up btn btn-success btn-sm">
                                    Sign up
                                </a>
                        @endguest
                     </div>
                </li>
                 <li class="nav-item d-md-none d-block">
                    <x-theme-switcher/>
                </li>
            </ul>

        </div>
    </div>
