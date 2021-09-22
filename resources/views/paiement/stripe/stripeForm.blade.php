@extends('layout.app')

@section('title')
    <title>Shopping-tn | Payment stripe form</title>
@endsection

@section('content')

    <div class="container">
     
        
        <form action="{{ route('payment-stripe-execution') }}" method="POST" id="stripeForm" class="p-3 w-50 bg-light shadow-sm card rounded-lg">
           <fieldset>
                <legend>Payment</legend>
            @csrf
             <input id="card_payment" name="card_payment" type="hidden" >
             <input id="amount" name="amount" type="hidden" value="{{$order['amount']}}">
           
                <div>
                    <label for="">Name</label>
                    <input type="text" class="form-control  small mb-3">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="text" class="form-control small mb-3">
                </div>
                <div class="mb-3">
                    <label for="">card number</label>
                    <div id="card-element" class="my-3"></div>
                    <div id="card-errors" role="alert"></div>
                </div>
                <button type="submit" class="btn btn-success" id="submit_button" data-secret="{{env('STRIPE_SECRET')}}">
                 <span class="fs-6 ">Pay amount</span> <span class="ms-1 fs-6">${{$order['amount']}}</span>   
                </button>
            </fieldset>
        </form>
    </div>

@endsection

@section('extra-js')
    <script>
                
                const submitButton = document.getElementById('submit_button');
                const cardErrors = document.getElementById('card-errors');
                const clientSecret = submitButton.dataset.secret;

                const stripe = Stripe("{{env('STRIPE_KEY')}}");
                const elements = stripe.elements();

                const cardElement = elements.create('card',{
                    classes:{
                        base:'stripeElement bg-white form-control  '
                    }
                });

                cardElement.mount('#card-element');

                submitButton.addEventListener('click', async (e) => {
                    e.preventDefault();

                    const { paymentMethod, error } = await stripe.createPaymentMethod('card', cardElement);

                    if (error) {
                        console.log(error.message) 
                        cardErrors.innerHTML=error.message;
                    } else {
                        console.log(paymentMethod.id) 
                        document.querySelector('#card_payment').value = paymentMethod.id;
                    }

                     document.getElementById('stripeForm').submit();
                });




    </script>
@endsection