<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'), // Hash the password
            'email' => 'your-email@gmail.com'
        ]);
    }
}
