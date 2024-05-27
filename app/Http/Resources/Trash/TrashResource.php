<?php

namespace App\Http\Resources\Trash;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrashResource extends JsonResource
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
            "code" => $this->code,
            "name" => $this->name,
            "unit" => $this->unit,
            "price" => $this->price,
        ];
    }
}
