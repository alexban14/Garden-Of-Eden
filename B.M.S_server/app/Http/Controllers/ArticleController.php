<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::query()->get();

        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createdArticle = Article::query()->create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $request->image,
            'user_id' => $request->user_id
        ]);

        return new ArticleResource($createdArticle);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        Log::info("REQUEST: " . $request);
        // $updated = $article->update($request->only(['title, body, image']));
        $updated = $article->update([
            'title' => $request->title ?? $article->title,
            'body' => $request->body ?? $article->body,
            'image' => $request->image ?? $article->image,
        ]);

        if (!$updated) {
            return new JsonResponse([
                'error' => ['Failed to update the resource']
            ], 400);
        }

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $deleted = $article->forceDelete();

        if (!$deleted) {
            return new JsonResponse([
                'error' => ['Failed to delete the resource']
            ], 400);
        }

        return new ArticleResource($article);
    }
}
