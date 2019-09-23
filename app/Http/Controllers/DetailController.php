<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
}
