<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Routing\Controller;

/**
 * @group User Management
 *
 * APIs to manage the user resource
 */
class UserController extends Controller
{
    /**
     * Display a list of users
     *
     * Gets a list of users
     *
     * @queryParam page_size int Size per page. Defaults to 20. Example 20
     * @queryParam page int Page to view.
     *
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     *
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     * @return ResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $users = User::query()->paginate($pageSize);

        return UserResource::collection($users);
    }

    /**
     * Store a newly created user in storage
     * @bodyParam name string required Name of the user. Example: John Doe
     * @bodyParam email string required Email of the user. Example: john@doe.com
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     *
     * @param StoreUserRequest $request
     * @param UserRepository $repository
     * @return UserResource
     */
    public function store(StoreUserRequest $request, UserRepository $repository): UserResource
    {
        $createdUser = $repository->create($request->only(['name', 'password','email']));

        return new UserResource($createdUser);
    }

    /**
     * Display the specified user.
     *
     * @urlParam id int required User ID
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     *
     * @param User $user
     * @return UserResource
     */
    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    /**
     * Display authenticated user.
     *
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     *
     * @return UserResource
     */
    public function showAuthenticated(Request $request): UserResource
    {
        $user = $request->user();
        return new UserResource($user);
    }

    /**
     * Update the specified user from storage.
     * @bodyParam name string Name of the user. Example: John Doe
     * @bodyParam email string Email of the user. Example: john@doe.com
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     *
     * @param Request $request
     * @param User $user
     * @param UserRepository $repository
     * @return UserResource
     */
    public function update(Request $request, User $user, UserRepository $repository): UserResource
    {
        $updated = $repository->update($request->only(['name', 'email', 'email_verified_at']), $user);

        return new UserResource($user);
    }

    /**
     * Remove the user resource from storage.
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     *
     * @param User $user
     * @param UserRepository $repository
     * @return UserResource
     */
    public function destroy(User $user, UserRepository $repository): UserResource
    {
        $deleted = $repository->forceDelete($user);
        return new UserResource($user);
    }
}
