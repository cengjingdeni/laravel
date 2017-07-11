<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 19:49
 */
namespace App\Http\Controllers;


class AdminController extends Controller{
    public function index(){
        return view('admin.index');
    }
    public function admin(){
        return view('admin.show');
    }

    public function user(){
        return view('admin.user');
    }
    public function add(){
        return view('admin.add');
    }

}