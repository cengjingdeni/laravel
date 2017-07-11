<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 16:48
 */

namespace App\Http\Controllers;


class DemoController extends Controller
{
    public function demo(){
        return view("demo.demo");
    }
}