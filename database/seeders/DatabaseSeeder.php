<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'npm' => null, // NULL karena tidak ada nilai untuk npm
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('admin123'), // Ganti 'password123' dengan kata sandi yang diinginkan
            'remember_token' => null,
            'role' => 1, // Role sebagai admin
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
