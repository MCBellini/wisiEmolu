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
        App\User::create([
        	'name' => 'Marco', 
        	'email' => 'marco_correia_62@msn.com',
        	'password' => bcrypt('123456')
        ]);
    }
}
