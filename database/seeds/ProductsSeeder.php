<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8',
        ];
        for($i=0; $i<sizeof($products); $i++):
            DB::table('products')->insert([
                'name' => $products[$i],
            ]);
        endfor;
    }
}
