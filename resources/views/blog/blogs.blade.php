@extends('layout.app')


@section('meta')

            <meta name="description" content="blog">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.72.0">

@endsection

@section('title')
    <title>Tndev | Blog category</title>
@endsection

@section('extra-css')

@endsection

@section('content')
        @php
               $lang = Request()->language;
               $path = Request()->path();
               session()->forget('lang_switcher_slug');
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
            //dd(session('lang_switcher_slug'));
        @endphp

    <aside>
        <x-offcanvas/>
    </aside>

    <div class="container" id="blog">

                <x-oval-shape shape="oval0"/>

                <form class="needs-validation d-md-none d-block" novalidate>
                    <div class="position-relative">
                        <input type="text" class=" px-5 search-input form-control
                            form-control-sm rounded-pill" name="item"
                        id="validationCustom01" placeholder="Search service...">
                        <i class="search-icon ms-3 fas fa-search  position-absolute"
                        style="top:9px; left:6px; color:rgb(155, 150, 150)"></i>
                    </div>
                </form>

                <div class="row row-cols-1 d-none d-md-block">
                    <div class="col text-dark ">
                        <div class="card text-white shadow-sm">
                            <img src="https://picsum.photos/1000/150" class="card-img" alt="...">
                            <div class="card-img-overlay " style="background-color: rgba(0, 0, 0, 0.5)">
                                <h5 class="card-title text-warning fw-bold">Card title</h5>
                                <span class="text-light small ">Date: 5/9/2023</span>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="" class="btn btn-outline-warning">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 gx-2 my-4 p-1">
                    <div class="col  text-dark  ">
                        <div class="card mb-3  shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/400" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title blog-title fw-bold">Card title</h5>
                                    <span class="text-muted small ">Date: 5/9/2023</span>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="" class="btn-reading">continue reading...</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col  text-dark  ">
                        <div class="card mb-3  shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="https://picsum.photos/400/400" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title blog-title fw-bold">Card title</h5>
                                     <span class="text-muted  small ">Date: 5/9/2023</span>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="" class="btn-reading">continue reading...</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <div class="row row-cols-1 row-cols-md-2 ">
                             @foreach ( $blogs as $blog)
                               <div class="col mb-3 p-3">
                                    <div class="card  shadow-sm">
                                         <img src="https://picsum.photos/800/400" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title blog-title fw-bold">{{ $blog[$lang.'title'] }}</h5>
                                             <span class="text-muted small">Date: {{ $blog['created_at']->format('d/m/Y') }}</span>
                                            <p class="card-text">{{ Str::limit( $blog[$lang.'body'] , 150) }}</p>
                                            <a href="
                                            {{route('blog-detail',
                                            ['language' => App::getLocale() , 'slug' => $blog[$lang.'slug']]
                                            )}} " class="btn-reading">continue reading...</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <aside class="col-md-4 d-none d-md-block">

                        @include('blog.aside-categories')

                    </aside>

                </div>


    </div>





@endsection
