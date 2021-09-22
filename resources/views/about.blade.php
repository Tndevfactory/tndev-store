@extends('layout.app')

@section('meta')

    <meta name="description" content="blog">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">

@endsection

@section('title')
      <title>Tndev | About</title>
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


    <div  id="about" class="container {{ themeDark() ? ' text-white ' : 'text-white' }}">



                <x-oval-shape shape="oval3"/>

        <div class="row row-cols-1 row-cols-md-2 about mt-md-5 g-0">

            <div class="col d-flex justify-content-md-end justify-content-center  ">
                <div class="lg-screen d-none d-md-block">
                    <img  class="img-fluid rounded-circle"
                    src="{{ asset('img/about/about.webp') }}"
                    alt="">
                </div>
                <div class=" xs-screen d-md-none d-block">
                    <img  class="img-fluid "
                    src="{{ asset('img/about/about.webp')}}"
                    alt="">
                </div>
            </div>

            <div class="col px-md-3 d-flex align-items-center">
                <div class="about-text  px-md-3 text-dark">
                    <h1 class="fs-1 ff-PT-Sans mt-3">About</h1>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ullam expedita libero ducimus. Quaerat, quidem! Libero incidunt dolorum deleniti sequi sunt aspernatur numquam? Animi enim, illo ducimus voluptatum porro facilis.
                   </p>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ullam expedita libero ducimus. Quaerat, quidem! Libero incidunt dolorum deleniti sequi sunt aspernatur numquam? Animi enim, illo ducimus voluptatum porro facilis.
                   </p>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ullam expedita libero ducimus. Quaerat, quidem! Libero incidunt dolorum deleniti sequi sunt aspernatur numquam? Animi enim, illo ducimus voluptatum porro facilis.
                   </p>
                   <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ullam expedita libero ducimus. Quaerat, quidem! Libero incidunt dolorum deleniti sequi sunt aspernatur numquam? Animi enim, illo ducimus voluptatum porro facilis.
                   </p>
                </div>
            </div>

        </div>

        <div class="divider bg-success my-5 border border-1 border-dark shadow-sm"></div>

        <div class="row row-cols-1 row-cols-md-2 contact-us ">

            <div class="col">
                <h2 class="text-dark fs-2">Disclaimer</h2>
                <div class="contact-us-disclaimer text-dark">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                         Ipsam accusamus similique repudiandae, consectetur omnis
                         tempore dolorum nesciunt officia itaque deserunt, deleniti
                          nobis pariatur blanditiis eveniet, at iure doloremque! Laboriosam,
                          iusto.
                        </p>
                </div>

                <div class="form-in">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            There were problems adding the file.
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @if($error == 'The image failed to upload.')
                                <li> size issue </li>
                                @endif

                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    @endif
                </div>


            </div>

            <div class="col">
                    <h2 class="text-dark fs-2">Contact us</h2>
                <div class="contact-us-form p-3 rounded-3">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-dark">Subject</label>
                            <input type="text" class="form-control">
                        </div>
                        <div  class="mb-4">
                            <label for="" class="form-label text-dark">Message</label>
                            <textarea type="text" class="form-control">
                            </textarea>
                        </div>
                        <div  class="mb-4">
                            <label for="" class="form-label text-dark">pdf file</label>
                           <input type="file" name="" id="">
                        </div>
                            <div class="d-grid gap-2 my-3">
                            <a href=""
                                class="contact-us-form-btn mt-3 ff-PT-Sans "
                                type="button"  >
                                Send
                            </a>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>


@endsection
