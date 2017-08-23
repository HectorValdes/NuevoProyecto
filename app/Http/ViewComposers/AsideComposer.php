<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;
use App\Tags;
class AsideComposer{

    public function compose(View $view){
            $categories = Category::all();
            $tags = Tags::all();
            $view->with('categories', $categories)->with('tags',$tags);
    }


}
