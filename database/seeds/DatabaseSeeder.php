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
        DB::table('users')->insert(
        		[	
        			'name' => 'admin',
        			'email' => 'admin@example.com',
        			'jabatan' => 'admin',
        			'password' => bcrypt('password')
        		]
        	);
    }
}
