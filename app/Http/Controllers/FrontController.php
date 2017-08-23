<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Tags;
class FrontController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index(){
        $articles = Article::orderBy('id', 'DESC')->paginate(4);

        $articles -> each(function ($articles){
            $articles -> category;
            $articles -> images;
            $articles -> tags;
        });
        return view('welcome')->with('articles', $articles);
    }

    public function searchCategory($name){
        $category = Category::SearchCategory($name)->first();
        $articles = $category ->articles()->paginate(5);
        $articles -> each(function ($articles){
            $articles -> category;
            $articles -> images;
            $articles -> tags;
        });
        return view('welcome')->with('articles', $articles);
    }

    public function searchTag($name){
        $tags = Tags::SearchTag($name)->first();
        $articles = $tags ->article()->paginate(5);
        $articles -> each(function ($articles){
            $articles -> category;
            $articles -> images;
        });
        return view('welcome')->with('articles', $articles);
    }

    public function  viewArticle($slug){
        $article = Article::where('slug','=',$slug)->firstOrFail();;
        $article -> category;
        $article -> user;
        $article -> tags;
        $article -> images;

        return view('article')->with('article', $article);
    }
}
