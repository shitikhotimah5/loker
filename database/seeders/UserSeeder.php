<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat user seeder, sesuikan field dgn database di table user

        //memanggil model user
        $user = User::factory(5)->create(); //membuat user sebanyak 5 fungsi factory
        $user = User::first(); //mengambil data pertama

        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = '$2y$10$PfrvTiPON6fhWz..ZQgZdu/3.XD4oUWNNbTaHTUOZdQTgvCwshSyy';
        $user->role_id = 1;
        $user->save();
    }
}
