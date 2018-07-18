<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('roles')->truncate();
        DB::table('roles')->insert([
            ['role_name' => 'Admin',],
            ['role_name' => 'Teacher',],
            ['role_name' => 'Student',],
        ]);
    }
}
