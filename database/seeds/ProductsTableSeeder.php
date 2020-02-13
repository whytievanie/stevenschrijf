<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      \App\Model\Product::insert([
         'name' => 'Alles mag',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem corporis cum molestias sint!',
         'photo' => '/storage/img/Allesmag.png',
         'price' => '22.50'
      ]);

      \App\Model\Product::insert([
         'name' => 'De wereld',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem corporis cum molestias sint!',
         'photo' => '/storage/img/dewereld.png',
         'price' => '24.00'
      ]);

      \App\Model\Product::insert([
         'name' => 'De waarheid',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem corporis cum molestias sint!',
         'photo' => '/storage/img/dewaarheid.png',
         'price' => '22.50'
      ]);

      \App\Model\product::insert([
         'name' => 'Mag dit?',
         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem corporis cum molestias sint!',
         'photo' => '/storage/img/magdit.png',
         'price' => '24.00'
      ]);           
   }
}