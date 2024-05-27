<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public static function createTransaction($data): Transaction
    {
        $trash = Trash::find($data["trash_id"]);
        $pricePerUnit = $trash->price;
        $weight = $data["weight"];

        return Transaction::create([
            "member_id" => $data["member_id"],
            "trash_id" => $data["trash_id"],
            "weight" => $weight,
            "price_per_unit" => $pricePerUnit,
            "total_price" => $pricePerUnit * $weight,
        ]);

    }
}
