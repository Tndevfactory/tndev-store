
@extends('layout.app')

@section('meta')

            <meta name="description" content="blog">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.72.0">

@endsection

@section('title')
      <title>Tndev | Agency</title>
@endsection


@section('content')
        @php
               $lang = Request()->language;
               $path = Request()->path();
               session()->forget('lang_switcher_slug');
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
        @endphp
    <aside>
        <x-offcanvas/>
    </aside>

    <div class="container " id="welcome">
        <x-nav-search/>
             @if (App::getLocale() == 'ar')
             <div class="arabic-showcase d-md-block d-none position-relative my-2">
                <div class="mobile-showcase-filtre position-absolute ">
                    <div class="mobile-showcase-text ">
                        <span>
                           arabic show case

                        </span>

                    </div>
                </div>
                <img
                src="https://picsum.photos/3000/600"
                class="img-fluid mobile-showcase-img"
                alt="">
            </div>

             @else
                  <x-carousel/>
             @endif

            <x-oval-shape shape="oval0"/>
            {{-- <x-oval-shape shape="oval1"/> --}}
            {{-- <x-oval-shape shape="oval2"/> --}}

        {{--
            <x-alert :type="'success'" class="p-3">
            this my first laravel compo
             </x-alert>
          <a href="{{ route('about-pdf', App::getLocale()) }}" class="btn btn-primary">get pdf</a>
        --}}



            <div class="toast_anime  d-none bg-gradient bg-opacity-75 rounded d-inline-block py-1 px-3 "
             style=" {{ themeDark() ? 'background-color: #283618' : 'background-color: #007f5f' }}; z-index: 999;">

                <span class="fs-3 text-white text-center ff-oswald">
                    {{Session::get("success")}}
                    Produit ajouté avec success
                </span>

                <i class="fas fa-check text-white" style=" font-size:1.5rem"> </i>

            </div>

            <div class="mobile-showcase-div d-block d-md-none position-relative">
                <div class="mobile-showcase-filtre position-absolute ">
                    <div class="mobile-showcase-text ">
                        <span>
                             {{ __('mobile show case') }}

                        </span>

                    </div>
                </div>
                <img
                src="{{ asset('storage/img/agency/showcase/img-1631389418.jpg') }}"
                class="img-fluid mobile-showcase-img"
                alt="">
            </div>

            @php

            //phpinfo();

            @endphp

            <a href="" class="new-project-link text-decoration-none"
                 data-bs-toggle="modal"   data-bs-target="#exampleModal" >
                <div class=" new-project-div  p-1 px-3 categories mb-2
                         shadow-sm rounded-3 d-flex  align-items-center  justify-content-center" >

                    <span class="new-project-text fs-5 fw-bold
                    {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Quicksand' }}
                     d-none d-md-inline text-uppercase ">
                       <h1>  {{ __('New project, get a quote,') }}
                        <span class="text-danger"> {{ __('Click now') }}</span>
                      </h1>
                        <i class="fas fa-briefcase blink"></i>
                    </span>
                    <span class="new-project-text fs-6 fw-bold {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Quicksand' }}  d-block d-md-none text-uppercase ">
                         {{ __('New project') }} ,
                         <span class="text-danger"> {{ __('Click now') }}</span>
                         <i class="fas fa-briefcase  blink"></i>
                    </span>

                 </div>
            </a>


            <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> {{ __('Request for New project')  }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="" action="">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label"> {{ __('Recipient')  }}</label>
                                    <input type="text" class="form-control" name="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="col-form-label">{{ __('Subject')  }}</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">{{ __('Message')  }}</label>
                                    <textarea class="form-control" name="message-text"></textarea>
                                </div>
                                 <div  class="mb-3">
                                    <label for="" class="form-label text-dark">{{ __('pdf file')  }}</label>
                                     <input type="file" name="" id="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button> --}}
                                <button type="submit" class="btn btn-primary"> {{ __('Send message')  }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>



        @foreach ( $categories as  $category )

            <div class="p-md-2 p-1 px-2 px-md-2 categories mb-2  shadow-sm rounded-3 d-flex
                        justify-content-start align-items-center"
                style="{{ themeDark() ? 'background-color: #000' : 'background-color: #213E4E' }}">

              <h2 class=" d-flex justify-content-center align-items-center" style="font-size: .91rem ; padding: 5px;margin: 0px;">
                    <a href="" class="text-decoration-none  text-white fw-bold">
                        <span class=" {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh fs-5': 'ff-Quicksand' }}">
                            {{$category[$lang.'name']}}
                        </span>
                    </a>
               </h2>

            </div>

            @foreach ( $subcategories as $subcategory)
                @if ($category->id== $subcategory->category_id)
                    <div class="p-md-2 p-1 px-3  subcategories shadow-sm rounded-3 mb-2 rounded-3
                                d-flex justify-content-between align-items-center "
                        style="{{ themeDark() ? 'background-color: #000' : 'background-color: #FCB80A' }}">

                         <h3 class=" d-flex justify-content-center align-items-center" style="padding: 3px;margin: 0px;">
                            <a href="" class="text-decoration-none " style="color:#0C537A">
                                <span class=" {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh ': 'ff-Poly' }}">
                                  {{ $subcategory[$lang.'name'] }}
                                </span>
                            </a>
                        </h3>

                        <a href="" class="text-decoration-none">
                            <span class=" me-1 {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Poly' }}"
                                  style="color:#0C537A"> {{ __('See more') }}
                            </span>
                        </a>
                    </div>

                @endif

             <div class="row row-cols-1 row-cols-md-4  ">
                @foreach ( $category->products as $product)
                     @if($subcategory->id  ==  $product->sub_category_id )
                        <div class="col mb-4 cardCbt">
                            <div class="card rounded-3  card_product ">
                                <div class="img-div-  d-flex justify-content-center">
                                    {{-- <img src="{{ asset($product['thumbnail_h300']) }}" class="img-fluid p-2 " alt="..."> --}}
                                    <img src="{{ $product->thumbnail_h300 }}" class="img-fluid p-2 " alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold fs-5 text-muted
                                    {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-Poly' }}">
                                        {{Str::limit( Str::ucfirst($product[$lang.'name']), 25)}}
                                    </h5>
                                    <div class="card-text fs-6 {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-PT-Sans' }}  mb-3">
                                        {{ Str::limit( $product[$lang.'description'] , 100)}}
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="
                                        {{route('details-product',
                                         ['language' => App::getLocale() , 'slug' => $product[$lang.'slug']]
                                         )}} "
                                            class="btn    {{ App::getLocale() == 'ar' ? 'ff-Noto-Naskh': 'ff-PT-Sans' }}  explore-btn " type="button">
                                            {{ __('Discover') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endif
                @endforeach
            </div>

            @endforeach
        @endforeach
    </div>
@endsection

@section('extra-js')


@endsection
