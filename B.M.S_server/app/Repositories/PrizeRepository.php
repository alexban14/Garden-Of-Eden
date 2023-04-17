<?php

namespace App\Repositories;
use App\Models\Prize;
use Illuminate\Support\Facades\DB;

class PrizeRepository
{
    public function create(array $attributes)
    {
        return DB::transaction(function() use($attributes) {
            $created_prize = Prize::query()->create([
                'name' => data_get($attributes, 'name'),
                'description' => data_get($attributes, 'description'),
                'user_is' => data_get($attributes, 'user_id')
            ]);

            return $created_prize;
        });
    }

    public function update(array $attributes, Prize $prize)
    {
        return DB::transaction(function() use($attributes, $prize) {
            $updatedPrize = $prize->update([
                'name' => data_get($attributes, 'name') ?? $prize->name,
                'description' => data_get($attributes, 'description') ?? $prize->description
            ]);

            return $updatedPrize;
        });
    }

    public function forceDelete(Prize $prize)
    {
        return DB::transaction(function() use($prize) {
            $deleted = $prize->forceDelete();
            return $deleted;
        });
    }
}
