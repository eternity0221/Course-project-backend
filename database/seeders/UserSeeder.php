<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'Админ',
            'email' => 'admin@mail.com',
            'address' => '639932, Тамбовская область, город Пушкино, бульвар Славы, 64',
            'password' => 'admin12345',
            'role' => 'admin',
        ];
        $user = [
            'name' => 'Пользователь',
            'email' => 'user@mail.com',
            'address' => '592745, Костромская область, город Пушкино, ул. Гоголя, 45',
            'password' => 'user12345',
            'role' => 'user',
        ];
        User::create($admin);
        User::create($user);
    }
}
