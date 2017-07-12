<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Img;

class ImgController extends Controller
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $prefix = '/uploads/imgs/';
        $url = $prefix.mt_rand(1,8).'.jpg';
        $data = array(
            'img_url' => $url
        );
        $rs = Img::create($data);
        dump($rs);die;
    }
}
