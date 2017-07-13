<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'abstract', 'pid', 'cid', 'qq', 'email', 'weibo', 'github'];


}
