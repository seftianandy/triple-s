<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat user baru
        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@seni.com', // Ganti jika perlu
            'password' => Hash::make('password'), // Ganti jika perlu
        ]);

        // Tambahkan role admin
        DB::table('roles')->insert([
            'user_id' => $user->id,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
