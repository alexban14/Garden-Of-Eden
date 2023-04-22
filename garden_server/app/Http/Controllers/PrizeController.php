<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Http\Requests\StorePrizeRequest;
use App\Http\Requests\UpdatePrizeRequest;
use App\Http\Resources\PrizeResource;
use App\Repositories\PrizeRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

/**
 * Summary of PrizeController
 */
class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $prizes = Prize::query()->paginate($pageSize);
        return PrizeResource::collection($prizes);
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Throwable
     */
    public function store(StorePrizeRequest $request, PrizeRepository $repository): PrizeResource
    {
        $created_prize = $repository->create($request->only(['name', 'description', 'expiration_date', 'user_id']));

        return new PrizeResource($created_prize);
    }

    /**
     * Display the specified resource.
     */
    public function show(Prize $prize): PrizeResource
    {
        return new PrizeResource($prize);
    }

    /**
     * Update the specified resource in storage.
     * @throws \Throwable
     */
    public function update(UpdatePrizeRequest $request, Prize $prize, PrizeRepository $repository): PrizeResource
    {
        $updated = $repository->update($request->only(['name', 'description', 'expiration_date']), $prize);
        return new PrizeResource($prize);
    }

    /**
     * Remove the specified resource from storage.
     * @throws \Throwable
     */
    public function destroy(Prize $prize, PrizeRepository $repository): PrizeResource
    {
        $deleted = $repository->forceDelete($prize);
        return new PrizeResource($prize);
    }
}
