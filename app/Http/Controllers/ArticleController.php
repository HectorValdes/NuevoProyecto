<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tags;
use App\Article;
use App\Images;
use Illuminate\Support\Facades\Facade;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articles = Article::search($request-> title)->orderby('id', 'asc') -> paginate(5);
        $articles -> each(function ($articles){
           $articles -> category;
           $articles -> user;
        });
        return view('admin.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderby('id', 'asc')->pluck('name','id');
        $tags = Tags::orderby('id','asc')->pluck('name', 'id');

        return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if($request -> file('image')){
            $file = $request -> file('image');
            $name = 'nuevoproyecto'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/images/articles';
            $file->move($path, $name);

            $article = new Article($request -> all());
            $article -> title = $request->title;
            $article -> content = $request->contenido;
            $article -> user_id = \Auth::user()->id;
            $article -> category_id = $request -> category_id;
            $article -> save();
//
            $image = new Images();
            $image -> nombre = "$name";
            $image -> article() -> associate($article);
            $image -> save();
            Flash::success('el articulo '.$article->title.' ha sido registrado con exito');
            return redirect()->route('articles.index');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article -> title = $request ->title;
        $article -> content = $request ->contenido;
        $article -> category_id = $request -> category_id;
        $article -> save();
        Flash::warning('el articulo '.$article->title.' fue editado con exito');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article -> delete();
        Flash::error('El articulo '.$article->title.' ha sido borrado de la existencia');
        return redirect() -> route('articles.index');
    }
}
