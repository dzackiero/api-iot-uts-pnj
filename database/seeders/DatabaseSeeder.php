<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Superadmin",
            "email" => "admin@admin.com",
            "password" => \Hash::make("password"),
        ]);

        $this->call(MemberSeeder::class);
        $this->call(TrashSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
