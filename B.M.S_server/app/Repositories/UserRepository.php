<?php

namespace App\Repositories;

use App\Exceptions\GeneralJsonException;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository // extends BaseRepository
{
    public function create(array $attributes)
    {
        return DB::transaction(function() use($attributes) {
            $createdUser = User::query()->create([
                'name' => data_get($attributes, 'name'),
                'password' => Hash::make(data_get($attributes, 'password')),
                'email' => data_get($attributes, 'email')
            ]);

            throw_if(!$createdUser, GeneralJsonException::class, 'Failed to create a user');

            return $createdUser;
        });
    }

    public function update(array $attributes, User $user)
    {
        return DB::transaction(function() use($attributes, $user) {
            $updatedUser = $user->update([
                'name' => data_get($attributes, 'name') ?? $user->name,
                'email' => data_get($attributes, 'email') ?? $user->email,
                'password' => data_get($attributes, 'password')
                                ? Hash::make(data_get($attributes, 'password'))
                                : $user->password
            ]);

            throw_if(!$updatedUser, GeneralJsonException::class, 'Failed to update user');

            return $updatedUser;
        });
    }

    public function forceDelete(User $user)
    {
        return DB::transaction(function() use($user) {
            $deleted = $user->forceDelete();

            throw_if(!$deleted, GeneralJsonException::class, 'Failed to delete user');

            return $deleted;
        });
    }
}
