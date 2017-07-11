<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InfoController extends Controller
{
    //
    public function show(){
        return view('info.show');
    }
    public function baseinfo(){
        return view('info.baseinfo');
    }
}
