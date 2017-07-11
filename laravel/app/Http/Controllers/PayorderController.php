<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 17:27
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Instalment;
use App\Sharp_user;

class PayorderController extends Controller
{
    public function show(){
        $data = Instalment::paginate(3);
        return view('payorder.show',['data'=>$data]);
    }
    public function add(){
        return view('payorder.add');
    }
    public function del(){
        $insalment_id = input::get('instalment_id');
        $data = Instalment::find($insalment_id)->delete();
        if($data){
            return redirect('payorder/show');
        }else{
            echo "删除失败";
        }
    }
    public function seluser(){
        $id = input::get('id');
        $data = Sharp_user::find($id);
        $arr = array(
            'error' => 0,
            'user' => $data
        );
        return json_encode($arr);
    }
    public function search(){
        $word = input::get("keyword");
        $data = DB::table("sharp_instlment")->where("set_time","like","%$word%")->paginate(2);
        print_r($data);
    }

}