<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DetailController extends Controller
{
    public function detail()
    {
    	$data=DB::table('goods')->get();
        return view('index/detail',['data'=>$data]);
    }
}
