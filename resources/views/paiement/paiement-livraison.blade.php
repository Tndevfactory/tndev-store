@extends('layout.app')

@section('title')
    <title>Shopping-tn | Payment a la livraison</title>
@endsection

@section('content')

    <div class="container">

     

        @if (Session::has('success'))
            <div class="alert alert-success  ms-3 fs-6 p-1 my-2">{{Session::get("success")}} </div>
        @endif 

        @if (Session::has('error'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("error")}} </div>
        @endif 
        {{-- @if (Session::has('result'))
            <div class="alert alert-light  ms-3 fs-6 p-1 my-2">{{Session::get("result")}} </div>
        @endif  --}}


        <div class="row mb-5">
           <div class="col">
             
           </div>
           <div class="col-9 mb-3">
                
                    
                  <div class="fs-3 ff-oswald"> Cash on delivery</div> 
                                    
                           
                         <div>
                          Mode de Paiement :    a la {{$req->paiment}}    
                         </div>  
                         <div>
                           Total:     {{$req->amount}}    
                         </div>
                <h5>Veuillez indiquer votre adresse et numero de telephone</h5> 
                <button class="btn btn-primary"> Confirmation de paiement a la livraison</button> 
                <button class="btn btn-success"> Sauvegarder votre commande</button> 
                                           
               <div>
                   <a class="text-decoration-none text-success fs-5 ff-oswald" href="{{ route('welcome') }}">
                           retourner a la boutique   <i class="fas fa-arrow-alt-circle-left text-dark"></i>
                   </a>
               </div>
           </div>
            
        </div>
    </div>

@endsection