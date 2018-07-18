<?php

use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	DB::table('role_permissions')->truncate();
    	DB::table('role_permissions')->insert([
            ['role_id' => 1,'permission_id' => 1,],
            ['role_id' => 1,'permission_id' => 2,],
            ['role_id' => 1,'permission_id' => 3,],
        ]);
    }
}
