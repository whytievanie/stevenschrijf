<?php

namespace App\Http\Controllers;

use App\cart;
use App\Model\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cart.index");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //We're calling the Product model as a parameter so Laravel knows it wants a Product and the ORM/Eloquent is getting our product
     //Try to dd($product) in function underneath to understand how this works.
    public function addProductsToCart(Product $product){

        //prepping array to store our product later
        $data = [
            'product_id' => $product->id,
            'amount' => 1
        ];

        //Calling to our function where were storing our data.
        $this->storeItemsToCart($data);

        //redirecting to an action
        return view('welcome');
    }


    //Protected function so we only can access this function inside this controller
    //This function is only purposed to store data thats why instantly return it.
    protected function storeItemsToCart($data){

        return cart::create([
            'product_id' => $data['product_id'],
            'amount' => $data['amount']
        ]);

        return view('cart.index')->with($params);

    }
    
    // public function cart(){
    //     $params = [
    //         'title' => 'Shopping Cart Checkout',
    //     ];

        
    // }
    
    // public function clear(){
    //     cart::clear();

    //     return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");;
    // }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
