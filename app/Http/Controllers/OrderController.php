<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        return view('index/order');
    }

    //确认订单
    public function orderConfirm(Request $request)
    {
        $data = $request->input();
        dd($data);
        $info = orderModel::where([
            'order_id'=>$data['order_id'],
            'goods_id'=>$data['goods_id']
        ])
            ->first()
            ->toArray();
        $data['g_price'] = $info['g_price']*$data['buy_num'];
        return view('index.order',['data'=>$data]);
    }
}
