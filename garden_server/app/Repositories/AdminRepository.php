<?php

namespace App\Repositories;

use App\Events\Models\UserCreated;
use App\Exceptions\GeneralJsonException;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminRepository
{
    /**
     * @throws \Throwable
     */
    public function create(array $attributes)
    {
        return DB::transaction(function() use($attributes) {
            $createdUser = User::query()->create([
                'role' => data_get($attributes, 'role'),
                'name' => data_get($attributes, 'name'),
                'password' => Hash::make(data_get($attributes, 'password')),
                'email' => data_get($attributes, 'email')
            ]);

            throw_if(!$createdUser, GeneralJsonException::class, 'Failed to create a user');
            event(new UserCreated($createdUser));
            return $createdUser;
        });
    }
}
