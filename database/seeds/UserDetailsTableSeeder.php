<?php

use Illuminate\Database\Seeder;


class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('user_details')->truncate();
        DB::table('user_details')->insert([
        	'id'=>1,
        	'address' => 'Rugvænget 12',
            'postal_code' => '2630',
            'mobile' => '28499085',
        ]);
    }
}
