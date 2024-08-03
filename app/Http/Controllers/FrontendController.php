<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Epaper;
use App\Models\poem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FrontendController extends Controller
{
    public function index(){
        $articles=article::all()->take(4);
        foreach ($articles as $article) {
            $article->content = Str::limit($article->content, 150, '...');
                    // Convert published_at to Bangla date
            $article->banglaPublishedDate = convertToBanglaDate($article->published_at);

        }

        $poems=poem::all()->take(4);
        foreach ($poems as $poem) {
            $poem->short_description = Str::limit($poem->content, 150, '...');
                    // Convert published_at to Bangla date
            $poem->banglaPublishedDate = convertToBanglaDate($poem->published_at);

        }

        $epapers=Epaper::all()->take(4);
        foreach ($epapers as $epaper) {
                    // Convert published_at to Bangla date
            $epaper->banglaPublishedDate = convertToBanglaDate($epaper->paper_date);

        }
        return view('frontend.pages.index',compact('articles','poems','epapers'));
    }
    public function epaper(){
       $epapers=Epaper::all();
        return view('frontend.pages.epaper.epaper',compact('epapers'));//
    }
    public function epaperdetails($slug){
        $epapers=Epaper::where('paper_slug',$slug)->first();
        
        // dd($releted_product);
        return view('frontend.pages.epaper.epaper_details', compact('epapers'));
    }
    public function poem(){
       $poems=poem::all();
        foreach ($poems as $poem) {
            $poem->short_description = Str::limit($poem->content, 150, '...');
                    // Convert published_at to Bangla date
            $poem->banglaPublishedDate = convertToBanglaDate($poem->published_at);

        }
        return view('frontend.pages.poem.main',compact('poems'));//
    }
    public function poemdetails($slug){
        $poem = Poem::where('slug', $slug)->first();
        // Convert published_at to Bangla date
        $poem->banglaPublishedDate = convertToBanglaDate($poem->published_at);
        return view('frontend.pages.poem.poem_details', compact('poem'));
    }

    public function article(){
        $articles=article::all();
        foreach ($articles as $article) {
            $article->content = Str::limit($article->content, 150, '...');
                    // Convert published_at to Bangla date
            $article->banglaPublishedDate = convertToBanglaDate($article->published_at);

        }
         return view('frontend.pages.Article.index',compact('articles'));//
     }
     public function articledetails($slug){

         $article = article::where('article_slug', $slug)->first();
         // Convert published_at to Bangla date
         $article->banglaPublishedDate = convertToBanglaDate($article->published_at);
         return view('frontend.pages.Article.details', compact('article'));
     }
}
