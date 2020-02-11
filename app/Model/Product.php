<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Telling which table we need.
    protected $table = 'products';
    
    //fillables for mass assignment.
    protected $fillable = [
        'image',
        'name',
        'price',
    ];

    public function getImage(){
        return "images/$this->image";
    }
}

//Ik zou niet alles zo maar moven, ik zou 't gewoon ergenst copy pasten en opnieuw aanmaken, dan zet ie alles goed.. :)
// Deze command: php artisan make:model Model\ModelName
//Sorry, ty.