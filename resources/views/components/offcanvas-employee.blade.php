@php
               $lang = Request()->language;
               $path = Request()->path();
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
 @endphp
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExampleEmployee" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="navbar-brand" href="{{route('welcome', [ 'language' => App::getLocale() ])}}">
                    <span class="title-brand {{ themeDark() ? 'text-primary' : '' }}" >
                        Tn Dev Employee
                        <i class="fas fa-laptop-code"></i>
                    </span>
                </a>
            </h5>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto menu">
                <li class=" text-dark fs-3 mt-1">Profil employee </li>
                <li class=" text-white  mt-1"> <a href="" class="text-decoration-none">Editer</a></li>
                <li class=" text-white  mt-1"> <a href="" class="text-decoration-none">Changer mot de passe</a></li>
                <li class=" text-white  mt-1"> <a href="{{ route('employee-manage-products') }}" class="text-decoration-none">Manage Products</a></li>

                <li  class="   mt-1">
                    <div class=" signature py-2 ">
                        <div class="small container d-flex justify-content-center">
                            <a href="" class="ff-Poly text-warning text-decoration-none signature-text small">
                                Powered by tndevfactory ©2021. All rights reserved.
                            </a>
                        </div>
                    </div>
               </li>
            </ul>

        </div>
    </div>
