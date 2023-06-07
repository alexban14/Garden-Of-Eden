<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecialistBookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'specialist' => $this->specialist,
            'date' => $this->date,
            'time' => $this->time,
            'user_id' => $this->user_id,
            'create_at' => $this->created_at
        ];
    }
}
