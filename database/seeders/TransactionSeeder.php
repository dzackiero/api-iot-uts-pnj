<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Transaction;
use App\Models\Trash;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = Member::all();
        foreach ($members as $member) {
            Transaction::createTransaction(Trash::inRandomOrder()->first()->id, $member->id, fake()->numberBetween(0, 10));
        }
    }
}
