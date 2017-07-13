<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * @description:文章列表
     * @User: luwei
     * @Date: 2017/7/13
     * @Time: 10:32
     * @return:
     */
    public function article(Request $request)
    {
        $data = Article::with('tags')->with(['imgs' => function($query){
            return $query->where(['is_face'=>1])->select()->get();
        }])->paginate();
        return $data;
    }

    /**
     * @description:作者个人资料
     * @User: luwei
     * @Date: 2017/7/13
     * @Time: 10:31
     * @return:
     */
    public function profile(){
        $data = Profile::first();
        return $data;
    }
}
