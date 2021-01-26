<?php

use Illuminate\Database\Seeder;
use App\Table\Reserve;

class ReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = factory(Reserve::class, 10)->create();
    }
}
