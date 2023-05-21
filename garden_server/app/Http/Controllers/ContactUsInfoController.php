<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreContactUsInfo;
use App\Models\ContactUsInfo;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactUsInfoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $pageSize = $request->page_size ?? 20;
        $contactUsInfos = ContactUsInfo::query()->orderBy('created_at')->paginate($pageSize);

        return response()->json([
            'data' => $contactUsInfos
        ],200);
    }

    public function store(StoreContactUsInfo $request): JsonResponse
    {
        $foundUser = User::where('email', '=', $request['email'])->first();
        if (!$foundUser) {
            $user = User::query()->create($request->only('name', 'email'));
            $createdInfo = ContactUsInfo::query()->create([
                'user_id' => $user->id,
                'message' => $request->message,
            ]);

            return response()->json([
                'data' => $createdInfo
            ], 201);
        }

        $createdInfo = ContactUsInfo::query()->create([
            'user_id' => $foundUser->id,
            'message' => $request->message,
        ]);

        return response()->json([
            'data' => $createdInfo
        ], 201);

    }

    public function delete(Request $request, ContactUsInfo $contactUsInfo): bool
    {
        $deleted = $contactUsInfo->forceDelete();

        throw_if(!$deleted,  GeneralJsonException::class, 'Failed to delete Contact Us Info');

        return $deleted;
    }
}
