<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Repositories\CommentRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;

/**
 * @group Comment Management
 *
 * APIs to manage the comments resource related to Articles
 */
class CommentController extends Controller
{
    /**
     * Display a listing of comments.
     *
     * Gets a list of Comments
     *
     * @queryParam page_size int Size per page. Defaults to 20. Example 20
     * @queryParam page int Page to view.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $pageSize = $request->page_size ?? 20;
        $comments = Comment::query()->paginate($pageSize);

        return CommentResource::collection($comments);
    }

    /**
     * Store a newly created comment in storage.
     *
     * @bodyParam body string required Body of the article. Example: The best article about improving life happiness
     * @bodyParam article_id string required The Article related to the comment. Example: 8
     *
     * @param StoreCommentRequest $request
     * @param CommentRepository $repository
     * @return CommentResource
     */
    public function store(StoreCommentRequest $request, CommentRepository $repository): CommentResource
    {
        $createComment = $repository->create($request->only(['body', 'user_id', 'article_id']));

        return new CommentResource($createComment);
    }

    /**
     * Display the specified comment.
     *
     * @urlParam id int required Comment ID
     * @apiResourceCollection  App\Http\Resources\CommentResource
     * @apiResourceModel App\Models\Comment
     *
     * @param Comment $comment
     * @return CommentResource
     */
    public function show(Comment $comment): CommentResource
    {
        return new CommentResource($comment);
    }

    /**
     * Update the specified comment in storage.
     *
     * @bodyParam body string Body of the article. Example: The best article about improving life happiness
     *
     * @param UpdateCommentRequest $request
     * @param Comment $comment
     * @param CommentRepository $repository
     * @return CommentResource
     */
    public function update(UpdateCommentRequest $request, Comment $comment, CommentRepository $repository): CommentResource
    {
        $updated = $repository->update($request->only(['body']), $comment);
        return new CommentResource($comment);
    }

    /**
     * Remove the specified comment from storage.
     * @apiResourceCollection App\Http\Resources\CommentResource
     * @apiResourceModel App\Models\Comment
     *
     * @param Comment $comment
     * @param CommentRepository $repository
     * @return CommentResource
     */
    public function destroy(Comment $comment, CommentRepository $repository): CommentResource
    {
        $deleted = $repository->forceDelete($comment);
        return new CommentResource($comment);
    }
}
