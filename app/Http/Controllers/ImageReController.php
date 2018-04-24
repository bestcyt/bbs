<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageReController extends Controller
{
    //
    public function index(){

        $image = Image::make('img/2.png');
        $image->fit(600,600);
//            $image->resize(600, 600);
//        $image->save('img/22.png');

        echo $image->response('png');
    }

    public function swiper(){

        return view('swiper.index');
    }

}
