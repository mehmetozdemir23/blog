<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleService
{
    public function storeArticle(array $attributes): void
    {
        $article = new Article($attributes);

        $article->author()->associate(auth()->user());

        $article->save();
    }

    public function updateArticle(Article $article, array $attributes): void
    {
        $article->update($attributes);

        $article->save();
    }

    public function destroyArticle(Article $article): void
    {
        Storage::delete("article_images/$article->image");

        $article->delete();
    }

    public function sortArticles($query, $sort = 'newest')
    {
        if ($sort === 'oldest') {
            $query->oldest();
        } else {
            $query->latest();
        }
    }

    public function filterArticlesByCategory($query, $category)
    {
        $query->when($category && $category !== 'all', function ($query) use ($category) {
            $query->where('category', $category);
        });
    }
}
