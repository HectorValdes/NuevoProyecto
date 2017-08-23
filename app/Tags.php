<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $table = "tags";
    protected $fillable = ['name'];

    public function article(){
    	return $this -> belongsToMany('App\Article') -> withTimestamps();
    }

    public function scopeSearch($query, $name){
        return $query->where('name', 'like', "%$name%");
    }

    public function scopeSearchTag($query, $name){
        return $query->where('name', '=', $name);
    }
}
