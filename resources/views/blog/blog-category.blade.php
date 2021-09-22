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
             //  session()->forget('lang_switcher_slug');
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
            //dd(session('lang_switcher_slug'));
        @endphp
    <aside>
        <x-offcanvas/>
    </aside>

    <div class="container" id="blog">

                <x-oval-shape shape="oval0"/>




                <div class="row">
                    <div class="col-md-8">


                        <div class="row row-cols-1 row-cols-md-2 ">
                             @foreach ( $blogs as $blog)
                               <div class="col mb-3 p-3">
                                    <div class="card ">
                                         <img src="https://picsum.photos/400/300" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog[$lang.'title'] }}</h5>
                                             <span class="text-muted">Date: {{ $blog['created_at']->format('d/m/Y') }}</span>
                                            <p class="card-text">{{ $blog[$lang.'body'] }}</p>
                                            <a href="#" class="btn btn-outline-primary">continue reading</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <aside class="col-md-4">


                        @include('blog.aside-categories')

                    </aside>

                </div>

    </div>


@endsection
