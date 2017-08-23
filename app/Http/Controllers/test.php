<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class test extends Controller
{
    //

    public  function  view($id){
        $article = Article::find($id);
        $article -> category;
        $article -> user;
        $article -> tags;

        return view('index', ['prueba' => $article]);
    }
}
