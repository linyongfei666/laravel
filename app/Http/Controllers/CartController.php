<?php

namespace App\Http\Controllers;
use App\Model\GoodsModel;
use DB;
use App\Model\CartModel;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
	//加入购物车
	public function cartadd(){
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
	//购物车首页
	public function cart()
	{
		$u_id=Session::get('u_id');
		$goodsInfo = DB::table('user')->where('u_id',$u_id)->first();
       if($goodsInfo==''){
            return redirect('/login');
        }
		$cartinfo = DB::table('cart')
				->join('goods','cart.goods_id','=','goods.g_id')
				->where('u_id',$u_id)
				->get();
		return view('index/cart',['cartinfo'=>$cartinfo]);
	}
	//更改购买数量
	public function cartbuynum(Request $request)
	{
		$g_id = $request->g_id;
		$buy_num = $request->buy_num;
		$res = $this->checkgoodsnumber($g_id,$buy_num);
		if($res){
			$where=[
					'goods_id'=>$g_id,
			];
			$updateInfo=[
				'buy_num'=>$buy_num,
			];
			$result=DB::table('cart')->where($where)->update($updateInfo);
			if($result){
				return ['code' => 1, 'res' => '修改数量成功'];
			}else{
				return ['code' => 0, 'res' => '修改数量失败'];
			}
		}else{
			$g_number = GoodsModel::where('g_id',$g_id)->get()->toArray();
			$aa = $g_number[0];
			$num = $aa['g_number'];
			$where=[
					'goods_id'=>$g_id,
			];
			$updateInfo=[
					'buy_num'=>$num,
			];
			CartModel::where($where)->update($updateInfo);
			return ['code' => 00, 'res' => '超出库存'];
		}
	}
	/** 检测库存*/
	public function checkgoodsnumber($g_id,$buy_num,$number=0)
	{
		//根据商品id 查询商品库存
		$g_number=DB::table('goods')->where("g_id",$g_id)->value("g_number");
		if($buy_num+$number>$g_number){
			return false;
		}else{
			return true;
		}
	}

	public function total()
	{
		$info=DB::table('cart as c')
				->select('buy_num','price')
				->join("goods as g",'c.goods_id','=','g.g_id')
				->get();
		$count=0;
		foreach($info as $k=>$v){
			$count+=$v->price*$v->buy_num;
		}
		return $count;
	}
	public function gettotal()
	{
		$g_id=request()->g_id;
		if(empty($g_id)){
			return 0;exit;
		}
		$goodsWhere=[
				['g_id','=',$g_id]
		];
		$price=DB::table('goods')->where($goodsWhere)->value('price');
		//获取商品购买数量
		$cartWhere=[
				['goods_id','=',$g_id],
		];
		$buy_num=DB::table('cart')->where($cartWhere)->value('buy_num');
		return $price*$buy_num;
	}

}
