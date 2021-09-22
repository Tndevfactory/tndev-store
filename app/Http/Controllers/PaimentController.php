<?php

namespace App\Http\Controllers;

use URL;
use Redirect;

use PayPal\Api\Item;
use PayPal\Api\Plan;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use App\Models\Paiment;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\Agreement;
use PayPal\Api\PayerInfo;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\PaymentDefinition;
use Illuminate\Support\Facades\Input;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Session;

class PaimentController extends Controller
{

    public function index(Request $request){

      if(empty($request->paiment) ){
            return back()->with('pay_method', 'Merci de choisir une methode de paiement');
      }

      if( $request->paiment == 'livraison' ){
        return $this->paimentLivraison($request);
      }

       $apiContext = new ApiContext(new OAuthTokenCredential(
             'AZTk5CdUioTebidPhlAgAG7xI8Kx7qnV1yIO9Vt4eYxcerktr58yCsD6P5VwgRo83rqnLnRrTBDb2DGD',
             'EBwXtaG2XhBIRqe_SJTg5uWFm5tKOUYP23hhJU1nkEycuVm57el7MdZn08oStIHHFfxMw2XJIUIQTuPh')
         );
         
      $amountToBePaid = numericFormat($request->amount);
      
      $payer = new Payer(); $payer->setPaymentMethod('paypal');
  
      $item_1 = new Item();  $item_1->setName('Shoptn Payment')->setCurrency('USD')->setQuantity(1)->setPrice($amountToBePaid); 
  
      $item_list = new ItemList();  $item_list->setItems([$item_1]);
  
      $amount = new Amount();
      $amount->setCurrency('USD')->setTotal($amountToBePaid);
			 
	   $redirect_urls = new RedirectUrls();
      $redirect_urls->setReturnUrl(URL::route('paiment-status'))->setCancelUrl(URL::route('paiment-cancel'));
      
      $transaction = new Transaction();
      $transaction->setAmount($amount)->setItemList($item_list)->setDescription('Shop-tn transaction');   
   
      $payment = new Payment();
      $payment->setIntent('Sale')->setPayer($payer)->setRedirectUrls($redirect_urls)->setTransactions(array($transaction));
              
      try {
           // open paypal link to business account  ask buyer//Payer to login with his personnal account
           $payment->create( $apiContext );
   
	 } catch (\PayPal\Exception\PPConnectionException $ex) {
           
		   if (\Config::get('app.debug')) {
              \Session::put('error', 'Connection timeout');
              return Redirect::route('/');
           } else {
              \Session::put('error', 'Some error occur, sorry for inconvenient');
              return Redirect::route('/');
           }
      }
	  
	  foreach ($payment->getLinks() as $link) {
        if ($link->getRel() == 'approval_url') {
           // save route paiment-status
           $redirect_url = $link->getHref();
         
           break;
        }
      }
      
      /** store payment ID to session **/
      \Session::put('paypal_payment_id', $payment->getId());

	  if (isset($redirect_url)) {
          // redirect to route paiment-status to trigger paimentStatus method below and execute payment final step
         return Redirect::away($redirect_url);
      }
  
      \Session::put('error', 'Unknown error occurred');
      return Redirect::route('/');
    }
   


    public function paimentStatus(Request $request)
    {
         $apiContext = new ApiContext(new OAuthTokenCredential(
             'AZTk5CdUioTebidPhlAgAG7xI8Kx7qnV1yIO9Vt4eYxcerktr58yCsD6P5VwgRo83rqnLnRrTBDb2DGD',
             'EBwXtaG2XhBIRqe_SJTg5uWFm5tKOUYP23hhJU1nkEycuVm57el7MdZn08oStIHHFfxMw2XJIUIQTuPh')
         );
         
      /** Get the payment ID before session clear **/
      $payment_id = Session::get('paypal_payment_id');
	   
      /** clear the session payment ID **/
      Session::forget('paypal_payment_id');      
	  
      // check of 3 elements essentials  payment_id , PayerID, token

	  if (empty($request->PayerID) || empty($request->token)) {
         session()->flash('error', 'Payment failed');
         return Redirect::route('/');
      }      
	  
	   $payment = Payment::get($payment_id, $apiContext);
      $execution = new PaymentExecution();
      $execution->setPayerId($request->PayerID);      /**Execute the payment **/
      $result = $payment->execute($execution, $apiContext);
      
      if ($result->getState() == 'approved') {

          session()->flash('success', 'Payment success');
          session()->flash('result', $result);

         return Redirect::route('payment-success');
      }      
	  
	      session()->flash('error', 'Payment failed');
         session()->flash('result', $result);

       return Redirect::route('payment-fail');   
    }

   
    public function paimentCancel(Request $request)
    {
          //dd($request->all());
           return redirect()->route('payment-fail')
           ->with('cancel-payment' , 'paiement annule par l acheteur')
           ->with('token' , $request->token ?? '' );
    }

    

    public function paimentLivraison(Request $request)
    {
          return view('paiement.paiement-livraison');
         
    }



}
