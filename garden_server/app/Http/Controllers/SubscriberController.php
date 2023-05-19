<?php

namespace App\Http\Controllers;

use App\Http\Resources\PrizeResource;
use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;

/**
 * @group Subscriber management
 *
 * APIs to manage the subscriber resource
 */
class SubscriberController extends Controller
{
    /**
     * Display a listing of subscribers.
     *
     * Get a list of Subscribers
     *
     * @queryParam page_size int Size per page. Defaults to 20. Example 20
     * @queryParam page int Page to view.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $subscribers = Subscriber::query()->paginate($pageSize);

        return SubscriberResource::collection($subscribers);
    }

    /**
     * Store a newly created Subscriber in storage.
     *
     * @bodyParam user_id int required User that subscribes to new articles. Example: 9
     *
     * @param StoreSubscriberRequest $request
     * @return SubscriberResource
     */
    public function store(StoreSubscriberRequest $request): SubscriberResource
    {
        $foundUser = User::where('email', '=', $request['email'])->first();
        if (!$foundUser) {
            $user_created = User::query()->create($request->only(['name', 'email']))->first();
            $user_subscribed = Subscriber::query()->where('user_id', '=', $user_created->id)->first();
            if ($user_subscribed) {
                return new SubscriberResource($user_subscribed);
            }
            $subscribed = Subscriber::query()->create([
                'user_id' => $user_created->id
            ]);

            return new SubscriberResource($subscribed);
        } else {
            $user_subscribed = Subscriber::query()->where('user_id', '=', $foundUser['id'])->first();
            if ($user_subscribed) {
                return new SubscriberResource($user_subscribed);
            }
            $subscribed = Subscriber::query()->create([
                'user_id' => $foundUser['id']
            ]);

            return new SubscriberResource($subscribed);
        }
    }

    /**
     * Display the specified subscribed user.
     *
     * @urlParam id int required User ID
     * @apiResourceCollection App\Http\Resources\PrizeResource
     * @apiResourceModel App\Models\Prize
     *
     * @param Subscriber $subscriber
     * @return SubscriberResource
     */
    public function show(Subscriber $subscriber): SubscriberResource
    {
        return new SubscriberResource($subscriber);
    }

    /**
     * Update the specified subscriber in storage.
     */
//    public function update(Request $request, Subscriber $subscriber)
//    {
//        return null;
//    }

    /**
     * Remove the specified subscriber from storage.
     *
     * @apiResourceCollection App\Http\Resources\PrizeResource
     * @apiResourceModel App\Models\Prize
     *
     * @param Subscriber $subscriber
     * @return SubscriberResource
     */
    public function destroy(Subscriber $subscriber): SubscriberResource
    {
        $delete = $subscriber->forceDelete();

        return new SubscriberResource($subscriber);
    }
}
