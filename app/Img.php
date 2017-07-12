<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    //
    protected $fillable = ['img_url'];

    public function articles(){
        return $this->belongsToMany('App\Artcile')->withTimestamps();
    }
}
