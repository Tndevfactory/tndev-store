  <div class="row ">

    {{-- <div class="col  d-flex justify-content-center align-items-center pe-1">
    <img src="{{Auth::user()->img_uri}} " class="d-inline-block rounded-circle" height="50" alt="">
    </div> --}}

    <style>

    .btn-auth:focus{
        box-shadow: none;
    }
    </style>

    <div class="col d-flex justify-content-center align-items-center">
        <div class="dropdown  ">

            <button class="btn-auth btn btn-transparent d-inline btn-sm  dropdown-toggle me-md-5"
                    type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                    <span class="text-dark small">{{Auth::user()->name}}</span>
            </button>

            <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-start"
            style="min-width: 2rem !important; font-size: .8rem !important"
            aria-labelledby="dropdownMenuButton">

                <li class="d-flex gap-2 justify-content-between align-items-center">
                    <a class="dropdown-item" href="{{
                        route('profile-'.Auth::user()->roles()->first()->name,
                        [ App::getLocale() ,  Auth::user()->id ])

                        }}">
                        Profil
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('auth-logout', App::getLocale())}}">
                        Deconnexion
                    </a>
                </li>

            </ul>
        </div>
    </div>

 </div>
