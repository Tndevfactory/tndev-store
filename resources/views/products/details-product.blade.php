@extends('layout.app')

@section('title')
    <title>Shopping-tn | Details</title>
@endsection

@section('content')
        @php
               $lang = Request()->language;
               $path = Request()->path();
            //   $path = Str::substr($path, 3);
            //    echo 'path= '.$path;
            //    echo 'lang= '.$lang;
            //$slug = $request->query('slug');

        @endphp

<aside>
    <x-offcanvas/>
</aside>

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 my-4  g-0">

       {{-- <h1>query string</h1> {{ Request::getQueryString() }}
      <h2>{{ Request::fullUrlWithQuery(['type' => 'phone']) }} </h2> --}}
        <div class="col  p-3 " >
            {{-- <img src="{{asset($product->thumbnail_h800) }}" class="img-fluid" alt="..."> --}}
             <img height="200px" src="{{asset($product->thumbnail_h800) }}" class=" d-block w-100 img-fluid" alt="...">
        </div>

        <div class="col  ">
             <div class="card  border border-0">
                    <div class="card-body  ">

                        <span class="card-text fw-bold fs-5">
                            {{ $product[$lang.'name'] }}
                        </span>

                        <p class="card-text">
                            <span class="card-text fw-bold"> Description:</span>
                             {{ $product[$lang.'description']}}
                        </p>

                        <div class="commande d-flex justify-content-center gap-3">
                                <a href="{{route('welcome', App::getLocale())}}"
                                    class="btn btn-primary btn-sm">
                                    Retour Store
                                </a>

                                <a href="#" class="btn btn-success btn-sm ">
                                    Commande
                                </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>


@endsection
