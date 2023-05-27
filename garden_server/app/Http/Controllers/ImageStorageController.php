<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Resources\ImageStorageResource;
use App\Models\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
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
        $validatedData = $request->validated();
        $validatedData['image'] = $request->file('image')->store('image');
        $imageStoredUrl = Storage::url($validatedData['image']);
        $imageToStore =  ImageStorage::query()->create([
            'image' => $imageStoredUrl
        ]);
        return new ImageStorageResource($imageToStore);
    }
}
