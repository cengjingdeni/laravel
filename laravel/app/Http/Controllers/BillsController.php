<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 17:25
 */

namespace App\Http\Controllers;


class BillsController extends Controller
{
    public function show(){
        return view('bills.show');
    }
}