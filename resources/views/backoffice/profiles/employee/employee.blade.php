@extends('backoffice.bk-layout.bk-app')

@section('title')
    <title>Shopping-tn | employee </title>
@endsection


@section('left-side-content')

    @include('backoffice.bk-components.left-side-employee')

@endsection

@section('right-side-content')

<div class=" signature py-2 d-flex justify-content-between pe-3 bg-light">
     <x-offcanvas-button-employee/>

    <a class="ms-1 text-decoration-none"
    href="{{ route('auth-logout', App::getLocale())}}">
        Deconnexion
   </a>

</div>
<x-offcanvas-employee/>
@yield('right-side-content-employee')



@endsection
