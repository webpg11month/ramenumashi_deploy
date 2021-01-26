<?php

use Illuminate\Database\Seeder;
use App\Table\Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = factory(App\Table\Shop::class, 10)->create();
    }
}
