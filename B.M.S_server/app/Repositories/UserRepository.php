<?php

namespace App\Repositories;
use App\Models\User;

class UserRepository // extends BaseRepository
{
    public function create(array $attributes)
    {
        $createdUser = User::query()->create([
            'name' => data_get($attributes, 'name'),
            'password' => hash('md5', data_get($attributes, 'password')),
            'email' => data_get($attributes, 'email')
        ]);

        return $createdUser;
    }

    public function update()
    {
        //
    }

    public function forceDelete()
    {
        //
    }
}
