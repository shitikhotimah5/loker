<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user'
        ];

        //Looping menggunakan collection

        collect($roles)->map(function ($name){
            //memanggil model role
            Role::query()
                ->updateOrCreate(compact('name'), compact('name'));
        });
    }
}
