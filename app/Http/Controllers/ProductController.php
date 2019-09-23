<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function product()
    {
        $data=DB::table('goods')->get()->toArray();
        return view('/index/product',compact('data'));
    }

}