@extends('layout.app')

@section('title')
    <title>Shopping-tn | Commande</title>
@endsection

@section('content')
<x-offcanvas></x-offcanvas>
    <div class="container">

       

        @if (Session::has('stock_limit'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("stock_limit")}} </div>
        @endif 
        @if (Session::has('pay_method'))
            <div class="alert alert-danger  ms-3 fs-6 p-1 my-2">{{Session::get("pay_method")}} </div>
        @endif 


        <div class="row mb-5 mt-1 gx-4">
            <div class="col-9 ">
                <div class="d-flex justify-content-end mb-1">
                    @if (Cart::count() > 0)
                        <a class="text-decoration-none btn btn-light " href="{{ route('cart-destroy') }}"> 
                        <span class=" "> 
                            Supprimer la commande 
                            <i class="  fas fa-trash-alt text-danger"></i>
                        </span>
                        </a>
                    @endif
                </div>

                @if (Cart::count() > 0)
                <table class="table table-hover text-center shadow-sm">
                    <thead class="bg-dark bg-opacity-50 bg-gradient">
                    <tr class=" text-white">
                        <th scope="col">#</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Quantite</th>
                        <th scope="col">Prix (HT)</th>
                        <th scope="col">Supprimer article</th>
                    </tr>
                    </thead>
                    <tbody class="table-light">
                    @foreach(Cart::content() as $row)
                        <tr class="">
                            <th scope="row"> {{$loop->index + 1}}</th>
                            <td style="text-align: left;" class=""><span class="ms-5">{{ $row->name }}</span></td>
                            <td>
                                <div class="input-group d-flex justify-content-center">
                                    <a href="{{ route('decrement-cart-qte', $row->rowId ) }}"
                                       class=" input-group-text btn btn-outline-danger ">-</a>
                                   
                                    <input type="text" class=" text-center"
                                     style="border: 1px #ddd solid; max-width: 4rem;"
                                     class="form-control form-control-sm w-50"
                                      value="{{$row->qty }} " title="quantite">

                                    <a href="{{ route('increment-cart-qte', $row->rowId ) }}"
                                       class="input-group-text btn btn-outline-success ">+</a>
                                </div>
                            </td>
                            <td>{{currencyFormat($row->price * $row->qty)  }} <span
                                        class="text-muted ms-1 small">TND</span></td>
                            <td><a href="{{ route('remove-cart-item', $row->rowId) }}">
                                    <i class="far fa-times-circle text-danger"></i> </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="d-flex justify-content-center my-5 py-5">
                    <span class="fs-1 text-center text-light fw-bold" style="text-shadow: 1px 1px 1px rgba(0,0,0,0.5)"> 
                        Votre panier est vide, voulez-vous retourner a la boutique  !
                        <a href="{{ route('welcome') }}" class="text-decoration-none">
                            <i class="fas fa-arrow-alt-circle-left text-dark"></i>
                        </a>
                    </span>
                </div> 
                @endif

            </div>
            <div class="col-3
                
                {{ themeDark() ? 'bg-dark bg-opacity-50' : 'bg-opacity-75' }} 
                 px-3 rounded-lg">
             
                @if (Cart::count() > 0)
                <table class="table table-hover  table--striped mt-2 ">
                    <thead class="bg-dark bg-opacity-50 ">
                        <tr class=" text-white">
                            <th colspan="5">
                                Details de la Commande 
                                {{-- Str::limit( Str::uuid()->toString(), 15) --}}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table-light">

                        <tr>
                            <td colspan="2">Quantite</td>
                            <td colspan="3"><span>  {{Cart::count()}} </span></td>
                        </tr>

                        <tr>
                            <td colspan="2">Total <span class="text-muted">(HT)</span></td>
                            <td colspan="3">
                                <span>{{Cart::subtotal()}}</span> 
                                <span  class="text-muted ms-1 small">TND</span></td>
                        </tr>

                        <tr>
                            <td colspan="2">Remise <span class="text-success">(-5%)</span></td>
                            <td colspan="3"><span>{{ remise( Cart::subtotal() ) }}</span>
                                <span class="text-muted ms-1 small">TND</span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">Coupon reduction</td>
                            <td colspan="2">
                                <span>
                                    <input type="text" class="form-control form-control-sm w-75">
                                </span>
                            </td>
                        </tr>
                    

                        <tr>
                            <td colspan="2">TVA <span class="text-muted">(+19%)</span></td>
                            <td colspan="3"><span>{{Cart::tax()}}</span>
                                <span class="text-muted ms-1 small">TND</span></td>
                        </tr>

                    
                        <tr>
                            <td colspan="3" title="Frais de livraison">Livraison <span class="text-muted">(+1%)</span></td>
                            <td colspan="2"><span>{{ fraisLivraison( Cart::total()) }}</span><span class="text-muted ms-1 small">TND</span>
                            </td>
                        </tr>
                    
                        <tr>
                            <td colspan="2">Total <span class="text-muted">(TTC)</span></td>
                            <td colspan="3"><span>{{totalApresRemise( Cart::total() ) }}</span><span class="text-muted ms-1 small">TND</span>
                            </td>
                        </tr>
                    
                    
                        <tr>
                            <td colspan="5" class="ff-oswald fs-5 text-muted">Methode de paiement:</td>
                        </tr>
                    
                    
                        <form action="{{ route('create-order') }}" method="POST">

                            @csrf
                        
                            <input type="hidden" value=" {{Cart::count()}}" name="qty">
                            <input type="hidden" value="{{totalApresRemise(Cart::total())}}" name="amount">

                        <tr>
                            <td  colspan="2">
                                <input type="radio" name="paiment" value="livraison" checked> A la livraison
                            </td>
                            
                            <td colspan="3">
                                <input type="radio" name="paiment" value="bancaire" >
                                Paypal
                            </td>
                        </tr>
                        
                        <tr>
                            <td  colspan="2">
                                <input type="radio" name="paiment" value="stripe" checked> Stripe
                            </td>
                            
                            <td colspan="3">
                                <input type="radio" name="paiment" value="visa" > Visa
                            </td>
                        </tr>
                    
                        <tr>
                            <td colspan="2">
                                <button type="submit" href="" class="btn btn-outline-success">Paiement</button>
                            </td>
                            <td colspan="3" class="">
                                <a href="{{ route('welcome') }}" class="btn btn-outline-primary">Boutique</a>
                            </td>
                        </tr>

                        </form>

                    </tbody>
                </table>
               @endif 
            </div>
        </div>
    </div>

@endsection