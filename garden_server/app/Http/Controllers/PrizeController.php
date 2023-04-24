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
 * @group Prize management
 *
 * APIs to manage the Prize resource
 */
class PrizeController extends Controller
{
    /**
     * Display a listing of prizes.
     *
     * Gets a list of Prizes
     *
     * @queryParam page_size int Size per page. Defaults to 20. Example 20
     * @queryParam page int Page to view.
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $prizes = Prize::query()->paginate($pageSize);
        return PrizeResource::collection($prizes);
    }

    /**
     * Store a newly created prize in storage.
     *
     * @bodyParam name string required Name of the prize. Example: Make up kit
     * @bodyParam description string required Description of the prize. Example: A very expensive Make up kit that you can win
     * @bodyParam expiration_date date required Expiration date of the prize. Example: 2023-05-23
     * @param StorePrizeRequest $request
     * @param PrizeRepository $repository
     * @return PrizeResource
     */
    public function store(StorePrizeRequest $request, PrizeRepository $repository): PrizeResource
    {
        $created_prize = $repository->create($request->only(['name', 'description', 'expiration_date', 'user_id']));

        return new PrizeResource($created_prize);
    }

    /**
     * @param Prize $prize
     * @return PrizeResource
     */
    public function show(Prize $prize): PrizeResource
    {
        return new PrizeResource($prize);
    }

    /**
     * Update the specified prize in storage.
     *
     * @urlParam id int required Prize ID
     * @apiResourceCollection App\Http\Resources\PrizeResource
     * @apiResourceModel App\Models\Prize
     *
     * @param Prize $prize
     * @return PrizeResource
     */
    public function update(UpdatePrizeRequest $request, Prize $prize, PrizeRepository $repository): PrizeResource
    {
        $updated = $repository->update($request->only(['name', 'description', 'expiration_date']), $prize);
        return new PrizeResource($prize);
    }

    /**
     * Remove the specified prize from storage.
     *
     * @apiResourceCollection App\Http\Resources\PrizeResource
     * @apiResourceModel App\Models\Prize
     *
     * @param Prize $prize
     * @param PrizeRepository $repository
     *
     * @return PrizeResource
     */
    public function destroy(Prize $prize, PrizeRepository $repository): PrizeResource
    {
        $deleted = $repository->forceDelete($prize);
        return new PrizeResource($prize);
    }
}
