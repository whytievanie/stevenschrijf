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
            'image' => '/storage/img/Allesmag.png',
            'name' => 'Alles mag',
            'price' => '22.50'
         ]);

         \App\Model\Product::insert([
            'image' => '/storage/img/dewereld.png',
            'name' => 'De wereld',
            'price' => '24.00'
         ]);

         \App\Model\Product::insert([
            'image' => '/storage/img/dewaarheid.png',
            'name' => 'De waarheid',
            'price' => '22.50'
         ]);

         \App\Model\product::insert([
            'image' => '/storage/img/magdit.png',
            'name' => 'Mag dit?',
            'price' => '24.00'
         ]);
      
    }
}
