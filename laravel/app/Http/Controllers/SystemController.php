<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 15:09
 */

namespace App\Http\Controllers;


class SystemController extends Controller
{
    public function show(){
        return view('system.show');
    }

}