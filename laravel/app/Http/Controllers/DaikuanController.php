<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 17:19
 */

namespace App\Http\Controllers;


class DaikuanController extends Controller
{
    public function show(){
        return view('daikuan.show');
    }
}