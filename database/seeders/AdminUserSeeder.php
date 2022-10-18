<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enum\User\UserType;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make("'admin123'"),
            'userType' => UserType::Admin,
        ])->create();
    }
}
