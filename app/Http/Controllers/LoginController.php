<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function register()
    {
        return view('index/register');
    }

    public function login()
    {
        return view('index/login');
    }
    public function regdo(Request $request)
    {
        $data=$request->input();
//        var_dump($data);
        if(empty($data['u_name']) || empty($data['u_pwd']) || empty($data['u_email'])){
            die('缺少参数');
        }
        $data['u_pwd']=md5($data['u_pwd']);
        $res1=DB::table('user')->first();
        //dd($res1);
        if($data['u_name'] == $res1['u_name']){
            die('该用户已经注册');
        }


        $res=DB::table('user')->insert($data);
        //dd($res);

        if($res){
            echo json_encode(['msg'=>'注册成功','code'=>1]);
        }

    }
}
