@php
               $lang = Request()->language;
               $path = Request()->path();
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
 @endphp
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExampleAdmin" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <a class="navbar-brand" href="{{route('welcome', [ 'language' => App::getLocale() ])}}">
                    <span class="title-brand {{ themeDark() ? 'text-primary' : '' }}" >
                        Tn Dev Admin
                        <i class="fas fa-laptop-code"></i>
                    </span>
                </a>
            </h5>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto menu">
               <li class=" text-dark fs-3 mt-1"> <h4 class="ff-oswald">Profil Admin</h4> </li>
                <li class=" text-white  mt-1">
                     <a href="" class="text-decoration-none ms-1">Editer Profil</a></li>

               <li class=" text-dark fs-3 mt-1"> <h4 class="ff-oswald">Manage Products</h4> </li>
                <li class=" text-white  mt-1">
                     <a  class="ms-1 text-decoration-none" href=""
                     class="text-decoration-none">List Products</a>
                </li>
                <li class=" text-white  mt-1">
                     <a  class="ms-1 text-decoration-none" href=""
                     class="text-decoration-none">Create Products</a>
                </li>
                 <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">Export products
                    </a>
               </li>
               <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">Import products
                    </a>
               </li>
               <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">view deleted products
                    </a>
               </li>


                 <li class=" text-dark fs-3 mt-1"> <h4 class="ff-oswald">Manage Blogs</h4> </li>
               <li class=" text-white  mt-1">
                    <a class="ms-1 text-decoration-none"  href=""
                         class="text-decoration-none">List blogs
                    </a>
               </li>


                 <li class=" text-dark fs-3 mt-1"> <h4 class="ff-oswald">Manage Users</h4> </li>
               <li class=" text-white  mt-1">
                    <a class="ms-1 text-decoration-none"  href=""
                         class="text-decoration-none">List users
                    </a>
               </li>
               <li class=" text-white  mt-1">
                     <a  class="ms-1 text-decoration-none" href=""
                     class="text-decoration-none">Create users</a>
                </li>
               <li class=" text-white  mt-1">
                     <a class="ms-1 text-decoration-none"  href=""
                         class="text-decoration-none">Manage users Role
                    </a>
               </li>
               <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">Export users
                    </a>
               </li>
               <li class=" text-white  mt-1">
                    <a class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">Import users
                    </a>
               </li>
               <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">view deleted users
                    </a>
               </li>


                <li class=" text-dark fs-3 mt-1"> <h4 class="ff-oswald">STATISTICS</h4></li>
                 <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">users stats
                    </a>
               </li>
                 <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">product stats
                    </a>
               </li>
                 <li class=" text-white  mt-1">
                    <a  class="ms-1 text-decoration-none" href=""
                    class="text-decoration-none">GUZZLE HTTP CLIENT
                    </a>
               </li>


            </ul>

        </div>
    </div>
