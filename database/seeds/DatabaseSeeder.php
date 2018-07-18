<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(PermissionSeeder::class);
        
        
    }
}
