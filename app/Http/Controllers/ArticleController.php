<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Services\ArticleService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct(public ArticleService $articleService)
    {
    }
    public function index()
    {
        $articles = Article::with('author:id,name')->latest()->paginate(7);

        return inertia('Article/Index', compact('articles'));
    }

    public function create()
    {
        return inertia('Article/Create');
    }

    public function show(Article $article)
    {
        $article->load('author:id,name');

        $article->setAttribute('imageFile', $article->imageFile());

        return inertia('Article/Show', compact('article'));
    }

    public function edit(Article $article)
    {
        $article->setAttribute('imageFile', $article->imageFile());

        return inertia('Article/Edit', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $validatedData = $request->validated();

        $this->articleService->storeArticle($validatedData);

        return to_route('articles.index');
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $this->authorize('update', $article);

        $validatedData = $request->validated();

        $this->articleService->updateArticle($article, $validatedData);

        return to_route('articles.index');
    }

    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);

        $this->articleService->destroyArticle($article);

        return to_route('articles.index');
    }
}