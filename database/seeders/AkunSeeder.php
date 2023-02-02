<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'ini akun admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'user',
                'name' => 'ini akun user (non admin)',
                'email' => 'user@example.com',
                'password' => bcrypt('12345')
            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
