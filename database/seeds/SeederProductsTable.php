<?php

use Illuminate\Database\Seeder;

use App\Product;

class SeederProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicses = config('comics');
        
        foreach($comicses as $comics){
            $newProduct = new Product();
            $newProduct->immage = $comics['thumb'];
            $newProduct->title = $comics['title'];
            $newProduct->description = $comics['description'];
            $newProduct->price = $comics['price'];
            $newProduct->series = $comics['series'];
            $newProduct->sale_date = $comics['sale_date'];
            $newProduct->type = $comics['type'];
            $newProduct->save();
        }
    }
}
