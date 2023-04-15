<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = $request->page_size ?? 20;
        $users = User::query()->paginate($pageSize);

        return UserResource::collection($users);
    }

    public function store(Request $request, UserRepository $repository)
    {
        $createdUser = $repository->create($request->only(['name', 'password','email']));

        return new UserResource($createdUser);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        $updated = $user->update($request->only(['name', 'email', 'email_verified_at']));

        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $deleted = $user->forceDelete();
        return new UserResource($user);
    }
}
