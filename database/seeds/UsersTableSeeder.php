<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Bruno Andrade',
            'email'     => 'bruno@nexomkt.com.br',
            'password'  => bcrypt('nexo00')
        ]);
    }
}
