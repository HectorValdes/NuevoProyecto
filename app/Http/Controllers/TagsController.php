<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
use Laracasts\Flash\Flash;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $tags = Tags::search($request-> name)-> orderby('id', 'ASC')->paginate(5);
        return view('admin.tags.index')-> with('tags', $tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag= new Tags($request->all());
        $tag -> save();
        Flash::success('la etiqueta '.$tag -> name.' ha sido agregado exitosamente');
        return redirect() -> route('tags.index');
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
        $tag = Tags::find($id);
        return view('admin.tags.edit')->with('tag', $tag);
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
        $tag = Tags::find($id);
        $tag -> name = $request ->name;
        $tag -> save();
        Flash::warning('la etiqueta '.$tag->name.' fue editado con exito');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag -> delete();
        Flash::error('La etiqueta '.$tag->name.' ha sido borrado de la existencia');
        return redirect() -> route('tags.index');
    }
}
