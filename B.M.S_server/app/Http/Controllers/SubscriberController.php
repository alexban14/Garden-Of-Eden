<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::query()->get();

        return SubscriberResource::collection($subscribers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subscriber_create = Subscriber::query()->create([
            'user_id' => $request
        ]);

        return new SubscriberResource($subscriber_create);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
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
    public function destroy(Subscriber $subscriber)
    {
        $delete = $subscriber->forceDelete();

        return new SubscriberResource($subscriber);
    }
}
