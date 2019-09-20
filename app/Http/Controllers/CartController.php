<?php

namespace App\Http\Controllers;
use DB;
use App\Model\CartModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function cart()
	{
		$cartinfo = DB::table('cart')
				->join('goods','cart.goods_id','=','goods.g_id')
				->get();
		return view('index/cart',['cartinfo'=>$cartinfo]);
	}


}
