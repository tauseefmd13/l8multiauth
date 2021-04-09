<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'password'=> bcrypt('12345678'),
               'is_admin'=>'1',
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'password'=> bcrypt('12345678'),
               'is_admin'=>'0',
            ],
        ];
  
        foreach ($users as $key => $value) {
        	User::create($value);
        }
    }
}
