<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // Membuat role customer
        $memberRole = new Role();
        $memberRole->name = "customer";
        $memberRole->display_name = "Customer";
        $memberRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin Tumbas';
        $admin->email = 'admin@tumbas.in';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole->id);
    }
}
