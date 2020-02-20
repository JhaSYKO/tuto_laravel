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
            ['P1', '1'],
            ['P2', '4'],
            ['P3', '2'],
            ['P4', '3'],
            ['P5', '1'],
            ['P6', '3'],
            ['P7', '3'],
            ['P8', '2'],
        ];
        for($i=0; $i<sizeof($products); $i++):
            DB::table('products')->insert([
                'name' => $products[$i][0],
                'user_id' => $products[$i][1],
            ]);
        endfor;
    }
}
