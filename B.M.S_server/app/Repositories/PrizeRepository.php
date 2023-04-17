<?php

namespace App\Repositories;
use App\Models\Prize;

class PrizeRepository
{
    public function create(array $attributes)
    {
        $created_prize = Prize::query()->create([
            'name' => data_get($attributes, 'name'),
            'description' => data_get($attributes, 'description'),
            'user_is' => data_get($attributes, 'user_id')
        ]);

        return $created_prize;
    }

    public function update()
    {}

    public function forceDelete()
    {}
}
