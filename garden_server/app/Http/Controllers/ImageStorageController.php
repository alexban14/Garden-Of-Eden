<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteImageRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Resources\ImageStorageResource;
use App\Models\ImageStorage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ImageStorageController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $images = ImageStorage::query()->paginate($pageSize);

        return ImageStorageResource::collection($images);
    }

    public function store(StoreImageRequest $request): ImageStorageResource
    {
        $fileName = time() . '.' . $request['image']->extension();
        $request['image']->storeAs('public/images', $fileName);
        $filePath = '/storage/images/' . $fileName;
        $imageToStore =  ImageStorage::query()->create([
            'image' => $filePath
        ]);
        return new ImageStorageResource($imageToStore);
    }

    public function destroy(DeleteImageRequest $request): JsonResponse
    {
        $imageRef = $request['image'];
        $imageStored = ImageStorage::query()->where('image', '=', $imageRef)->first();
        if (!$imageStored) {
            return response()->json(['error' => 'Image not found']);
        } else {
            $imageDeleted = $imageStored->forceDelete();
        }

        $imageName = \Str::after($imageRef, 'storage/');
        if ( Storage::disk('public')->exists($imageName) ) {
            Storage::disk('public')->delete($imageName);
            return response()->json(['data' => 'Image deleted']);
        } else {
            return response()->json(['error' => 'Image file not found on disk']);
        }
    }
}
