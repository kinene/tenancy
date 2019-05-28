<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$70I6v27AyalW28APXZcTQe1UQ9O4AVXpGDrq5beZ1yNLGeXJjVt7q',
            'remember_token' => null,
            'created_at'     => '2019-05-28 13:15:54',
            'updated_at'     => '2019-05-28 13:15:54',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
