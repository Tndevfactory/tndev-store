@extends('layout.app')


@section('meta')

            <meta name="description" content="blog">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.72.0">

@endsection

@section('title')
    <title>Tndev | Blog</title>
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
                 <a class="btn-reading ff-Roboto-Condensed" href="{{ route('blogs', App::getLocale()) }}">
                       Back
                 </a>
                <div class="row row-cols-1  ">
                    <div class="col mb-3 p-3">
                        <div class="card p-3  shadow-sm" style="background-color: rgba(255, 255, 255, 0.1)">
                                <img height="200px" src="https://picsum.photos/800/400" class=" d-block w-100 img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title blog-title">{{ $blog[$lang.'title'] }}</h5>
                                    <span class="text-muted small">Date: {{ $blog['created_at']->format('d/m/Y') }}</span>
                                <p class="card-text">{{ $blog[$lang.'body'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-md-4">
                @include('blog.aside-categories')
            </aside>
        </div>
    </div>


@endsection
