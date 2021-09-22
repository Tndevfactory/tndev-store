<div class="{{  Request::path() == Request()->language ? 'd-none' : ''}}">
   <nav aria-label="breadcrumb" class="mt-2 py-2">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item">
                <a href="{{ route(Route::currentRouteName(), [ 'language' => App::getLocale() ]) }}" class="text-decoration-none 
                {{ themeDark() ? 'text-white ' : 'text-dark' }}  fw-bold">
                    <i class="fas fa-network-wired"></i> Agency
                </a>
            </li>

            <li  urlPath="#" class="breadcrumb-item active  {{ themeDark() ? 'text-white ' : 'text-dark' }}">
             
                {{  Request::path() == Request()->language ? '' : Request::path()}}

               
              
            </li>
        </ol>
 </nav>
</div>