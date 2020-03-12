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
        DB::table('users')->insert([
            'name' => 'Md. Admin',
            'card_no' => 'e-001',
            'role' => 'admin',
            'email' => 'admin@hrm.com',
            'password' => bcrypt('admin'),
        ]);


        DB::table('users')->insert([
            'name' => 'Md. User',
            'card_no' => 'e-002',
            'role' => 'user',
            'email' => 'user@hrm.com',
            'password' => bcrypt('user'),
        ]);
    }
}
