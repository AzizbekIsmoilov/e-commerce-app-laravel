<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'  => "admin",
        ]);
        Role::create([
            'name'  => "customer",
        ]);
        Role::create([
            'name'  => "shop_manager",
        ]);
    }
}
