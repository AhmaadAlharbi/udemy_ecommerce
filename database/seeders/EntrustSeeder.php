<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();
        $adminRole = Role::create(['name' => 'admin', 'display_name' => 'Administration', 'description' => 'Administrator', 'allowed_route' => 'admin',]);
        $supervisorRole = Role::create(['name' => 'supervisor', 'display_name' => 'Supervisor', 'description' => 'Supervisor', 'allowed_route' => 'admin',]);
        $customerRole = Role::create(['name' => 'customer', 'display_name' => 'Customer', 'description' => 'Customer', 'allowed_route' => null,]);
        $admin = User::create(['first_name' => 'Admin', 'last_name' => 'System', 'username' => 'admin', 'email' => 'admin@ecommerce.test', 'email_verified_at' => now(), 'mobile' => '966500000000', 'password' => bcrypt('123123123'), 'status' => 1, 'remember_token' => Str::random(10)]);
        $admin->attachRole($adminRole);

        $supervisor = User::create(['first_name' => 'Supervisor', 'last_name' => 'System',  'username' => 'supervisor', 'email' => 'supervisor@ecommerce.test', 'email_verified_at' => now(), 'mobile' => '966500000001', 'password' => bcrypt('123123123'), 'status' => 1, 'remember_token' => Str::random(10)]);
        $supervisor->attachRole($supervisorRole);

        $customer = User::create(['first_name' => 'Sami', 'last_name' => 'Mansour', 'username' => 'sami', 'email' => 'sami@gmail.com', 'email_verified_at' => now(), 'mobile' => '966500000002', 'password' => bcrypt('123123123'), 'status' => 1, 'remember_token' => Str::random(10)]);
        $customer->attachRole($customerRole);

        for ($i = 1; $i <= 20; $i++) {
            $random_customer = User::create(['first_name' => Str::random(10), 'last_name' => Str::random(10), 'username' => Str::random(10),  'email' => Str::random(10) . '@gmail.com', 'email_verified_at' => now(), 'mobile' => rand(1, 10000), 'password' => bcrypt('12345678'), 'status' => 1, 'remember_token' => Str::random(10)]);
            $random_customer->attachRole($customerRole);
        }
    }
}