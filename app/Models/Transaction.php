<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trash(): BelongsTo
    {
        return $this->belongsTo(Trash::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public static function createTransaction($trash_id, $member_id, $weight): Transaction
    {
        $trash = Trash::find($trash_id);
        $pricePerUnit = $trash->price;

        return Transaction::create([
            "member_id" => $member_id,
            "trash_id" => $trash_id,
            "weight" => $weight,
            "price_per_unit" => $pricePerUnit,
            "total_price" => $pricePerUnit * $weight,
        ]);

    }
}
