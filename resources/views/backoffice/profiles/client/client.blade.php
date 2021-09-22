@extends('backoffice.bk-layout.bk-app')

@section('title')
    <title>Shopping-tn | client </title>
@endsection


@section('left-side-content')


    @include('backoffice.bk-components.left-side-client')

@endsection

@section('right-side-content')

<div class=" signature py-2 d-flex justify-content-between pe-3 bg-light">
     <x-offcanvas-button-client/>

    <a class="ms-1 text-decoration-none"
    href="{{ route('auth-logout', App::getLocale())}}">
        Deconnexion
   </a>

</div>
<x-offcanvas-client/>
@yield('right-side-content-client')



@endsection
