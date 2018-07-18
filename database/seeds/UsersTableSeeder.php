<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();
        DB::table('users')->insert([
        	'name' => 'Ajay Kumar',
            'email' => 'ajay@gmail.com',
            'password' => bcrypt('secret'),
            'user_role_id' => 1,
        ]);
    }
}
