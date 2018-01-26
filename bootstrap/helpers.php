<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/26
 * Time: 17:33
 */

use Illuminate\Support\Facades\Route;

function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}