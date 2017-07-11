<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 16:45
 */
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
header("content-type:text/html;charset=utf-8");
class ArticleController extends Controller
{
    public function article(){
//        echo time();die;
        $data = Article::all();
//        print_r($data);die;
        return view('article.article',['data'=>$data]);
    }
    public function article_cate(){
        return view('article.article_cate');
    }
    public function add(){
        return view('article.add');
    }
    public function addcate(){
        return view('article.addcate');
    }
    public function addcat(Request $request){
        $data = $request->input();
        print_r($data);die;
    }

}