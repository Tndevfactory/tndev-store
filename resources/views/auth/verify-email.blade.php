@extends('layout.app')

@section('title')
    <title>Shopping-tn | verify email </title>
@endsection

@section('content')

    <div class="container my-3">
        @if ( session()->get('status'))
            <div class="div bg-success fs-5 text-white p-1 text-center">
                <span class="text-white">{{ session()->get('status')}}</span>
            </div>
        @endif
        @if ( session()->get('message'))
            <div class="div bg-success fs-5 text-white p-1 text-center">
                <span class="text-white">{{ session()->get('message')}}</span>
            </div>
        @endif


        <div class="row row-cols-1 row-cols-md-2">
            <div class="col p-3">
                <img src="https://picsum.photos/800/400" class="img-fluid" alt="">
            </div>
            <div class="col">
                <div class="p-1">
                    <div class="fs-3 mx-auto mt-1 mb-1">Systeme de verification</div>
                     <h2>if you misplace verification link , click button below</h2>
                    <form action="{{ route('verification-resend', App::getLocale())}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info"> verif link</button>
                    </form>
                </div>

            </div>
        </div>



    </div>

@endsection
