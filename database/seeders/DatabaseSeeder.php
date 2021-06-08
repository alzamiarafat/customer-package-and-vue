<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $passSystem = 789456123;
        $userSystem = User::create([
            'name' => 'System Admin',
            'email' => 'system.admin@mailinator.com',
            'type' => 'system',
            'weight' => 99.99,
            'acl' => 'C_R_E_D',
            'status' => 1,
            'password' => bcrypt($passSystem),
            //'remember_token' => str_random(10),
        ]);

        User::create([
            'name' => 'Merchant Admin',
            'email' => 'merchant.admin@mailinator.com',
            'type' => 'merchant',
            'weight' => 39.99,
            'acl' => 'C_R_E_D',
            'status' => 1,
            'password' => bcrypt($passSystem),
            //'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Operator Admin',
            'email' => 'operator.admin@mailinator.com',
            'type' => 'merchant',
            'weight' => 39.99,
            'acl' => 'C_R_E_D',
            'status' => 1,
            'password' => bcrypt($passSystem),
            //'remember_token' => str_random(10),
        ]);
    }
}
