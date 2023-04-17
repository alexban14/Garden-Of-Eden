<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Http\Requests\StorePrizeRequest;
use App\Http\Requests\UpdatePrizeRequest;
use App\Http\Resources\PrizeResource;
use App\Repositories\PrizeRepository;
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
    public function index(Request $request)
    {
        $pageSize = $request->page_size ?? 20;
        $prizes = Prize::query()->paginate($pageSize);
        return PrizeResource::collection($prizes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, PrizeRepository $repository)
    {
        $created_prize = $repository->create($request->only(['name', 'description', 'body']));

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
