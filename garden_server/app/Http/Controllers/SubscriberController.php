<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $subscribers = Subscriber::query()->paginate($pageSize);

        return SubscriberResource::collection($subscribers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request): SubscriberResource
    {
        $userId = $request['user_id'];
        $subscriber_create = Subscriber::query()->create([
            'user_id' => $userId
        ]);

        return new SubscriberResource($subscriber_create);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber): SubscriberResource
    {
        return new SubscriberResource($subscriber);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        return null;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber): SubscriberResource
    {
        $delete = $subscriber->forceDelete();

        return new SubscriberResource($subscriber);
    }
}
