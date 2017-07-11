<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 16:42
 */
namespace App\Http\Controllers;


class BlockController extends Controller
{
    public function show(){
        return view('block.show');
    }
    public function add(){
        return view('block.add');
    }

}