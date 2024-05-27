<?php

namespace App\Http\Resources\Member;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/* @mixin \App\Models\Member */
class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => sprintf("%04d", $this->id),
            "name" => $this->name,
            "address" => $this->address,
        ];
    }
}
