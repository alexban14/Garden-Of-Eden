<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyCommentOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $comment = $request->route('comment');
        $userId = $request->user()->id();

        if($comment->user_id !== $userId) {
            return \response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
