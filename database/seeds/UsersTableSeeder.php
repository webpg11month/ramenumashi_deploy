<?php

use Illuminate\Database\Seeder;
use App\Table\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Table\User::class, 10)->create();
    }
}
