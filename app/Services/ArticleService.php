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

        $imageFile = $attributes['imageFile'];

        if ($imageFile) {
            $article->image = basename($imageFile->storeAs('article_images', $article->id . '.' . $imageFile->extension()));
        }

        $article->save();
    }

    public function updateArticle(Article $article, array $attributes): void
    {
        $article->update($attributes);

        $newImage = $attributes['newImage'];
        if ($newImage) {
            Storage::delete("article_images/$article->image");
            $article->image = basename($newImage->storeAs('article_images', $article->id . '.' . $newImage->extension()));
        }

        $article->save();
    }

    public function destroyArticle(Article $article): void
    {
        Storage::delete("article_images/$article->image");

        $article->delete();
    }

    public function sortArticles($query, $sort = 'newest')
    {
        if ($sort === 'newest') {
            $query->latest();
        } else if ($sort === 'oldest') {
            $query->oldest();
        }
    }
}