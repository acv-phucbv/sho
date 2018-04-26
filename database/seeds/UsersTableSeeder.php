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
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'fullname' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'birthday' => '21/01/1991',
        ]);
    }
}
