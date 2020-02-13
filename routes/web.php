<?php

use Illuminate\Support\Facades\Route;
use App\cart;
use App\product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('cart', 'CartController');
Route::resource('question', 'QuestionController');

Route::get('/home', 'HomeController@index')->name('home');


//Were using {product} as our param, laravel knows what to do with that :):):)
// Route::get('/cart/{product}/add', 'CartController@addProductsToCart')->name('cart.add');

//Sort these names out, can mean anyything.
// Route::post('/cart-checkout', 'CartController@cart')->name('cart.checkout');
// Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');

// Route::get('/shopping-cart-add', function ($quantity) {
    
//     $product = Product::find(1);

//     cart::add($product->id, $product->image, $product->name, $product->price, 1, array());

//     cart::update(1,[
//         'quantity' => $quantity
//     ]);

//     foreach (cart::getContent() as $product){
//         echo "<div> Id: $product->id </div>";
//         echo "<div> image: $product->image</div>"; 
//         echo "<div> Name: $product->name</div>";
//         echo "<div> Price $product->price</div>";
//         echo "<div> Quantity $product->quantity</div>";
//     }

    Route::get('/', 'ProductsController@index');

    Route::get('cart', 'ProductsController@cart');

    Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

    Route::patch('update-cart', 'ProductsController@update');

    Route::delete('remove-from-cart', 'ProductsController@remove');
    
// });





