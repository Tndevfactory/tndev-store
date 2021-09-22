    <div class="btn-group" id="lang-switcher">

        <button
            type="button"
            class="btn btn-transparent dropdown-toggle"
            id="defaultDropdown" data-bs-toggle="dropdown"
            data-bs-auto-close="true" aria-expanded="false">
            <img  src="{{asset($flagPath())}}" height="27" alt="">
        </button>
@php
    $lang = Request()->language;
    $path = Request()->path();
    // $path = Str::substr($path, 3);
    // $path = Str::of($path)->trim();

// if($p){
//     echo 'session here';
// }
//    if(request()->session()->has($path)){
//        echo 'session has array';
//    }else{
//         echo 'session doesnt have an array';
//    }
   // $slug = session()->pull($path);
  //  print_r($slug);
// check path
// get the session

@endphp


        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="defaultDropdown">
            <li class="mb-1">

                <a href="{{ route(Route::currentRouteName(),  ['en', 'slug'=>  session('lang_switcher_slug')['enslug'] ?? null ] )}}" class="text-decoration-none ms-1">
                    <img src="{{asset('img/flag/en.webp')}}" height="27" class="ms-1" alt="">
                    <span class="ff-oswald ms-1">English</span>
                </a>
            </li>
            <li class="mb-1">
                <a href="{{ route(Route::currentRouteName(), ['fr', 'slug'=> session('lang_switcher_slug')['frslug']  ?? null   ] )}}" class="text-decoration-none ms-1">
                    <img src="{{asset('img/flag/fr.webp')}}" height="27" class="ms-1" alt="">
                    <span class="ff-oswald ms-1">Français</span>
                </a>
            </li>
            <li class="mb-1">
                <a href="{{ route(Route::currentRouteName(), ['ar', 'slug'=> session('lang_switcher_slug')['arslug']  ?? null ] )}}" class="text-decoration-none ms-1">
                    <img src="{{asset('img/flag/ar.webp')}}" height="27" class="ms-1" alt="">
                    <span class="ff-oswald ms-1">عربي</span>
                </a>
            </li>
            <li class="mb-1">
                 <a href="{{ route(Route::currentRouteName(),  ['es', 'slug'=> session('lang_switcher_slug')['esslug']  ?? null ] )}}" class="text-decoration-none ms-1">
                    <img src="{{asset('img/flag/es.webp')}}" height="27" class="ms-1" alt="">
                    <span class="ff-oswald ms-1">Español</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route(Route::currentRouteName(), ['it' , 'slug'=> session('lang_switcher_slug')['itslug']  ?? null ] )}}" class="text-decoration-none ms-1">
                    <img src="{{asset('img/flag/it.webp')}}" height="27" class="ms-1" alt="">
                    <span class="ff-oswald ms-1">Italiano</span>
                </a>
            </li>
             <li class="mb-1">
                 <a href="{{ route(Route::currentRouteName(), ['de', 'slug'=> session('lang_switcher_slug')['deslug'] ?? null  ] )}}" class="text-decoration-none ms-1">
                    <img src="{{asset('img/flag/de.webp')}}" height="27" class="ms-1" alt="">
                    <span class="ff-oswald ms-1">Deutsch</span>
                </a>
            </li>
        </ul>

    </div>

