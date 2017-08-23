<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Article extends Model
{
    use Sluggable;

    protected $table = "articulos";
    protected $fillable = ['title', 'content', 'user_id','category_id'];

    public function category(){
    	return $this -> belongsTo('App\Category');
    }
    public function user(){
    	return $this -> belongsTo('App\User');
    }
    public function images(){
    	return $this -> hasMany('App\Images');
    }
    public function tags(){
    	return $this -> belongsToMany('App\Tags');
    }

    public function scopeSearch($query, $title){
        return $query->where('title', 'like', "%$title%");
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        // TODO: Implement sluggable() method.
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
