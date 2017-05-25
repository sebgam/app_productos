<?php

use Illuminate\Database\Seeder;
use desaroolloG\product;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(product::class,80)->create();
    }
}
