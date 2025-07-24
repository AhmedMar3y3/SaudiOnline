<?php

namespace Modules\Comments\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Articles\Entities\Article;
use Modules\Comments\Http\Requests\CommentRequest;
use Modules\Comments\Transformers\CommentResource;
use Modules\Support\Traits\ApiTrait;

class CommentController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, ApiTrait;

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request): JsonResponse
    {
        $article = Article::findOrFail($request->article_id);

        $comment = $article->comments()->create($request->validated());

        $data = new CommentResource($comment);

        return $this->sendResponse($data, trans('articles::articles.messages.created'));
    }

    public function index(Article $article)
    {
        $comments = CommentResource::collection($article->comments);

        return $this->sendResponse($comments, 'success');
    }
}
