<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralJsonException;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

/**
 * @group Article Management
 *
 * APIs to manage the article resource
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of articles
     *
     * Gets a list of Articles.
     *
     * @queryParam page_size int Size per page. Defaults to 20. Example 20
     * @queryParam page int Page to view.
     * @param Request $request
     * @return AnonymousResourceCollection
     *
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $articles = Article::query()->paginate($pageSize);

        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created article in storage.
     *
     * @bodyParam title string required Title of the article. Example: Improve Happiness
     * @bodyParam body string required Body of the article. Example: This is an article about improving life happiness
     * @bodyParam image url optional Image for the article. Example: http://image.com
     * @param StoreArticleRequest $request
     * @param ArticleRepository $repository
     * @return ArticleResource
     */
    public function store(StoreArticleRequest $request, ArticleRepository $repository): ArticleResource
    {
            $user_id = $request->user()->id;
            $article = $request->only(['title', 'body', 'image']);
            $article = [
                ...$article,
                'user_id' => $user_id
            ];
            $createdArticle = $repository->create($article);

        return new ArticleResource($createdArticle);
    }

    /**
     * Display the specified article.
     *
     * @urlParam id int required Article ID
     * @apiResourceCollection App\Http\Resources\ArticleResource
     * @apiResourceModel App\Models\Article
     *
     * @param Article $article
     * @return ArticleResource
     */
    public function show(Article $article): ArticleResource
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified article in storage.
     *
     * @bodyParam title string Title of the article. Example: Improve Happiness
     * @bodyParam body string Body of the article. Example: This is an article about improving life happiness
     * @bodyParam image url Image for the article. Example: http://image.com
     * @param UpdateArticleRequest $request
     * @param Article $article
     * @param ArticleRepository $repository
     * @return ArticleResource
     */
    public function update(UpdateArticleRequest $request, Article $article ,ArticleRepository $repository): ArticleResource
    {
        $updated = $repository->update($request->only(['title', 'body', 'image']), $article);

        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     * @apiResourceCollection App\Http\Resources\ArticleResource
     * @apiResourceModel App\Models\Article
     *
     * @param Article $article
     * @param ArticleRepository $repository
     * @return ArticleResource
     */
    public function destroy(Article $article, ArticleRepository $repository): ArticleResource
    {
        $deleted = $repository->forceDelete($article);

        return new ArticleResource($article);
    }
}
