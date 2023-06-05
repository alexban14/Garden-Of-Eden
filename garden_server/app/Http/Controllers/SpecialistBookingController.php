<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Resources\SpecialistBookingResource;
use App\Models\SpecialistBooking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SpecialistBookingController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $bookings = SpecialistBooking::query()->orderBy('created_at', 'desc')->paginate($pageSize);

        return SpecialistBookingResource::collection($bookings);
    }

    public function store(StoreBookingRequest $request): SpecialistBookingResource
    {
        $foundUser = User::query()->where('email', '=', $request['email'])->first();
        if (!$foundUser) {
            $user_created = User::query()->create($request->only(['name', 'email']))->first();
            return $this->isSpecialistBooked($request, $user_created['id']);
        } else {
            return $this->isSpecialistBooked($request, $foundUser['id']);
        }
    }

    /**
     * Store method helper function
     *
     * @param StoreBookingRequest $request
     * @param $id
     * @return SpecialistBookingResource|\Illuminate\Http\JsonResponse
     */
    public function isSpecialistBooked(StoreBookingRequest $request, $id): \Illuminate\Http\JsonResponse|SpecialistBookingResource
    {
        $isBooked = SpecialistBooking::query()
            ->where('specialist', '=', $request['specialist'])
            ->where('date', '=', $request['date'])
            ->where('time', '=', $request['time'])
            ->first();

        if (!$isBooked) {
            return response()->json([
                'error' => [
                    'message' => 'The specialist is already booked for the selected date and time'
                ]
            ]);
        }

        $specialistBooked = SpecialistBooking::query()->create([
            ...$request->only(['specialist', 'time', 'date']),
            'user_id' => $id,
        ]);

        return new SpecialistBookingResource($specialistBooked);
    }
}
