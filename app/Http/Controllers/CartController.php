<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Inventory;
use function number_format;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Product $product, Request $request)
    {
       // return $product;
        
        Cart::add($product, 1);

        //return back()->with('success', 'produit ajouté avec succés');
        return Cart::count();
    }

    public function viewCart()
    {
        return view('commandes.commande');
    }

    public function destroyCart()
    {
        Cart::destroy();
        return back()->with('success', 'cart items deleted');
    }

    public function incrementCartQty($rowId)
    {
        $c = Cart::get($rowId);

        $stock = Inventory::where('id',$c->model->inventory_id)->first();

        if($c->qty <  $stock->quantity){
                Cart::update($rowId, $c->qty + 1); // maj uniquement si stock est suffisant
        }else{
             return back()->with('stock_limit', 'la limite de stock est atteinte');
        }
      
        return back()->with('success', 'increment quantity updated');
    }

    public function decrementCartQty($rowId)
    {
        $c = Cart::get($rowId);
        Cart::update($rowId, $c->qty - 1); // Will update the quantity
        return back()->with('success', 'decrement quantity updated');
    }

    public function removeCartitem($rowId)
    {

        Cart::remove($rowId);
        return back()->with('success', 'item removed updated');
    }

}
