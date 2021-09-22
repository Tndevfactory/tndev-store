@extends('layout.app')

@section('title')
    <title>Shopping-tn | Payment success</title>
@endsection

@section('content')

    <div class="container">

    

        @if (Session::has('success'))
            <div class="alert alert-success  ms-3 fs-6 p-1 my-2">{{Session::get("success")}} </div>
        @endif 

        @if (Session::has('error'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("error")}} </div>
        @endif 
        @if (Session::has('result'))
            <div class="alert alert-light  ms-3 fs-6 p-1 my-2">{{Session::get("result")}} </div>
        @endif 


        <div class="row mb-5">
           <div class="col">
             
           </div>
           <div class="col-9 mb-3">
                <a class="text-decoration-none text-success fs-1 ff-oswald" href="{{ route('welcome') }}">
                    
                  <div>Paiement réalisé avec succés ! </div> 
                   voulez-vous retourner a la boutique                    
                            <i class="fas fa-arrow-alt-circle-left text-dark"></i>   
                            {{Cart::destroy()}}                   
                
                </a>
           </div>
            
        </div>
    </div>

@endsection