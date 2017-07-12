<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','uid','description'];

    //与标签多对多关系
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    //与图片多对多关系
    public function imgs(){
        return $this->belongsToMany('App\Img')->withTimestamps();
    }

}
