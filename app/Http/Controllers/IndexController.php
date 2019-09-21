<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    public function index()
    {
        $data = DB::table('goods')->get();
        return view('index/index', ['data' => $data]);
    }
}


