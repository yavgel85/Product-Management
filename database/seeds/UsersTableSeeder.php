<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$O9QplkLCr43guhV65svyWudY.X5W45hcGI1B2gxb9hf8K4W8XUJra',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
