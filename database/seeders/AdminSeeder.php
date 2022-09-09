<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;


class AdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@taleh.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('developer', 'admin');
    }
}
