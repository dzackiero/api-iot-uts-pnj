<?php

namespace App\Http\Resources\Transaction;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "trash" => $this->whenLoaded("trash", function () {
                return $this->trash;
            }),
            "member" => $this->whenLoaded("member", function () {
                return $this->member;
            }),
            "weight" => $this->weight,
            "price_per_unit" => $this->price_per_unit,
            "total_price" => $this->total_price,
        ];
    }
}
