<!-- left side admin   -->
  <h5 class="mt-2" id="offcanvasExampleLabel">
        <a class="navbar-brand" href="{{route('welcome', [ 'language' => App::getLocale() ])}}">
            <span class="title-brand {{ themeDark() ? 'text-primary' : '' }}" >
                Tn Dev Admin
                <i class="fas fa-laptop-code"></i>
            </span>
        </a>
  </h5>

 <ul class="list-unstyled text-white  mt-3">
                <li class=" text-white fs-3 mt-1"> <h4 class="ff-oswald">Profil Admin</h4> </li>
                <li class=" text-white  mt-1">
                     <a href="" class="text-decoration-none ms-1">Editer Profil</a></li>

               <li class=" text-white fs-3 mt-1"> <h4 class="ff-oswald">Manage Products</h4> </li>

                <li class=" text-white  mt-1">
                     <a  class="ms-1 text-decoration-none" href="{{ route('admin-manage-categories',App::getLocale()) }}"
                     class="text-decoration-none">Categories</a>
                </li>

                <li class=" text-white  mt-1">
                     <a  class="ms-1 text-decoration-none" href="{{ route('admin-manage-subcategories',App::getLocale()) }}"
                     class="text-decoration-none">Subcategories</a>
                </li>

                <li class=" text-white  mt-1">
                     <a  class="ms-1 text-decoration-none" href="{{ route('admin-manage-products', App::getLocale() ) }}"
                     class="text-decoration-none">Products</a>
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


               <li class=" text-white fs-3 mt-1"> <h4 class="ff-oswald">Manage Blogs</h4> </li>
               <li class=" text-white  mt-1">
                    <a class="ms-1 text-decoration-none"
                        href="{{ route('admin-manage-featured-blogs', App::getLocale()) }}"
                         class="text-decoration-none">Featured Blogs
                    </a>
               </li>
               <li class=" text-white  mt-1">
                    <a class="ms-1 text-decoration-none"
                     href="{{ route('admin-manage-blogs', App::getLocale()) }}"
                         class="text-decoration-none">Blogs
                    </a>
               </li>


                 <li class=" text-white fs-3 mt-1"> <h4 class="ff-oswald">Manage Users</h4> </li>
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


                <li class=" text-white fs-3 mt-1"> <h4 class="ff-oswald">STATISTICS</h4></li>
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
