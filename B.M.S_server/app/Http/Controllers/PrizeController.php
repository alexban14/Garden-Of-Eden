<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Http\Requests\StorePrizeRequest;
use App\Http\Requests\UpdatePrizeRequest;
use App\Http\Resources\PrizeResource;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Summary of PrizeController
 */
class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prizes = Prize::query()->get();
        return PrizeResource::collection($prizes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created_prize = Prize::query()->create([
            'name' => $request->name,
            'description' => $request->description,
            'user_is' => $request->user_id
        ]);

        return new PrizeResource($created_prize);
    }

    /**
     * Display the specified resource.
     */
    public function show(Prize $prize)
    {
        return new PrizeResource($prize);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrizeRequest $request, Prize $prize)
    {
        $updated = $prize->update($request->only('name', 'description'));
        return new PrizeResource($prize);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prize $prize)
    {
        $deleted = $prize->forceDelete();
        return new PrizeResource($prize);
    }
}
