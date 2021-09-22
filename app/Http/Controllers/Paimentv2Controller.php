<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Payments\CapturesRefundRequest;

class Paimentv2Controller extends Controller
{
    public static function client()
    {
        // preparation du apicontext et le client paypal
        return new PayPalHttpClient(self::environment());
    }

    public static function environment()
    {
        $clientId = env("PAYPAL_CLIENT_ID") ?: env("PAYPAL_SANDBOX_CLIENT_ID");
        $clientSecret = env("PAYPAL_SECRET") ?: env("PAYPAL_SANDBOX_SECRET");
        return new SandboxEnvironment($clientId, $clientSecret);

    }

   private static function buildRequestBody($amount)
    {
        return array(
            'intent' => 'CAPTURE',
            'application_context' =>
                array(

                    'return_url' => env("PAYPAL_SANDBOX_RETURN_URL"),
                    'cancel_url' => env("PAYPAL_SANDBOX_CANCEL_URL")

                ),

            'purchase_units' =>

                array(
                    0 =>
                        array(
                            'amount' =>
                                array(
                                    'currency_code' => 'USD',
                                    'value' => $amount
                                )
                        )
                )

        );

    }


    public function createOrder(Request $req)
    {
        if(empty($req->paiment) ){
                return back()->with('pay_method', 'Merci de choisir une methode de paiement');
        }


        if( $req->paiment == 'livraison' ){
            return $this->paimentLivraisonv2($req);
        }


        if( $req->paiment == 'stripe' ){
            return $this->paimentStripeForm($req);

        }

        $amount=numericFormat($req->amount);

        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = self::buildRequestBody($amount);

       // Call PayPal to set up a transaction before execution
        $client = self::client();
        $response = $client->execute($request);
    
        foreach ($response->result->links as $link) {
            if ($link->rel == 'approve') {
            $redirect_url = $link->href;
            break;
            }
        }

      /** store order ID to session **/
      \Session::put('paypal_order_id', $response->result->id);

      if (isset($redirect_url)) {
          // redirect to route paiment-status to trigger paimentStatus method below and execute payment final step
         return Redirect::away($redirect_url);
      }
  
      \Session::put('error', 'Unknown error occurred');
      return Redirect::route('/');


  }

    /**
     *  execute payment method capture automatically PayerID after login paypal and capture also token
     */

     public static function captureOrder()
    {
        /** Get the order ID from session stored in create order method**/
        $order_id = Session::pull('paypal_order_id');

        $request = new OrdersCaptureRequest($order_id);

        $client = self::client();
        $response = $client->execute($request);

        if ($response->result->status == 'COMPLETED') {
          session()->flash('success', 'Payment success');
          return Redirect::route('payment-success')->with('result', $response->result->status);
        }      
	  
	     session()->flash('error', 'Payment failed');
         session()->flash('result', $result);

       return Redirect::route('payment-fail')->with('result', $response->result->status); 

        
    }

    public function paimentCancelv2(Request $request)
    {
          //dd($request->all());
           return redirect()->route('payment-fail')
           ->with('cancel-payment' , 'paiement annule par l acheteur')
           ->with('token' , $response->result ?? '' );
    }

    public function paimentLivraisonv2(Request $req)
    {
          return view('paiement.paiement-livraison', compact('req'));
         
    }

    public function paimentStripeForm(Request $req)
    {
        $order=$req->all();
          return view('paiement.stripe.stripeForm', compact('order'));
         
    }

    public function paimentStripeExecute(Request $request, User $user)
    {

         $authUser = auth()->user();
         $amount = stripeCurrencyFormat($request->amount);

         $result = $authUser->charge($amount, $request->card_payment);
          
          return redirect::away($result->charges->data[0]->receipt_url);
         // return view('paiement.stripe.stripePaySuccess', compact('order'));
         
    }

}
