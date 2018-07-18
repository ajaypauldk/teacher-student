<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	DB::table('permissions')->truncate();
        DB::table('permissions')->insert([
        	['permission_name' => 'add_teacher',],
        	['permission_name' => 'display_teacher_student_list',],
        	['permission_name' => 'activate_teacher',],
        	['permission_name' => 'deactivate_teacher',],
        	['permission_name' => 'delete_teacher',],
        ]);   
    }
}
