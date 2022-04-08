<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = ['name', 'slug'];

    public function posts() {
        return $this->BelongsTo('App\Post');
    }
    public function tags() {
        return $this->BelongsToMany('App\Tag');
    }


}
