<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class article extends Model
{
    use HasFactory;
    protected $fillable = ['article_title','article_slug','Author_name', 'Author_designation', 'content', 'published_at'];

    

    public static function newArticles($request)
    {
        $article = new article();
        self::saveBasicInfo($article, $request);
    }

    public static function updateArticles($request, $article)
    {
        self::saveBasicInfo($article, $request);
    }

    private static function saveBasicInfo($article, $request)
    {
        $article->article_title = $request->article_title;
        $article->article_slug = Str::slug($request->article_title, '-');
        $article->Author_name = $request->Author_name;
        $article->Author_designation = $request->Author_designation;
        $article->content = $request->content;
        $article->published_at = date('d-m-y');
        $article->save();
    }

    public static function deleteArticles($article)
    {

        $article->delete();
    }

}
