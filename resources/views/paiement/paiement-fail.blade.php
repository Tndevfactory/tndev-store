@extends('layout.app')

@section('title')
    <title>Shopping-tn | Payment fail</title>
@endsection

@section('content')

    <div class="container">

      

       

        @if (Session::has('error'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("error")}} </div>
        @endif 
        @if (Session::has('cancel-payment'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("cancel-payment")}} </div>
        @endif 
        @if (Session::has('result'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("result")}} </div>
        @endif 

        <div class="row my-5 ">
           <div class="col">
            token pay : {{$token ?? ''}}
           </div>
           <div class="col">
                <a class="text-decoration-none text-danger fs-2" href="{{ route('welcome') }}">
                    <div>Paiement est annule  </div> 
                    <span class="text-dark">Retour Boutique</span> 
                    <i class="fas fa-arrow-alt-circle-left text-dark"></i>   
                </a>
           </div>
        </div>
    </div>

@endsection