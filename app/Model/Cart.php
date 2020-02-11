<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';


    //Now we don't know which product belongs to who??
    //You have to think about ordering stuff with/without an account.
    protected $fillable = ['product_id','amount'];
    
}
