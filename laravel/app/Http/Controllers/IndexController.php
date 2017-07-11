<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/6
 * Time: 11:06
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function show(){
        return view('home.show');
    }
}