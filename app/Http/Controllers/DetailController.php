<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
<<<<<<< HEAD
=======
use Session;
>>>>>>> 32d255ec8b5e8a987016ad26031baa277b4f1944
class DetailController extends Controller
{
    public function detail($id)
    {
    	$where=[
            'g_id'=>$id
        ];
    	$data=DB::table('goods')->where($where)->get();
        return view('index/detail',['data'=>$data]);
    }
<<<<<<< HEAD
=======

    //加入购物车
	public function detailadd(){
		$g_id = request()->g_id;
		$goodsWhere = [
				'g_id' => $g_id,
		];
		// $goodsInfo = DB::table('goods')->where($goodsWhere)->first();
		$u_id=Session::get('u_id');
		$goodsInfo = DB::table('user')->where('u_id',$u_id)->first();
		$user_id = $goodsInfo->u_id;
		$info = [
				'goods_id' => $g_id,
				'u_id'=>$u_id
		];
		$res = DB::table('cart')->insert($info);
		if ($res) {
			return ['code' => 1, 'res' => '加入购物车成功'];
		} else {
			return ['code' => 0, 'res' => '加入购物车失败'];
		}


	}
>>>>>>> 32d255ec8b5e8a987016ad26031baa277b4f1944
}
