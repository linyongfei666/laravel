<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $data = DB::table('goods')->get();
        return view('index/index', ['data' => $data]);
    }
<<<<<<< HEAD
}
=======

    public function index()
    {
    	$data=DB::table('goods')->get();
        return view('index/index',['data'=>$data]);
    }

}
>>>>>>> hs-dev
=======

}
>>>>>>> 4d0c7698d2128fcccc3b4532de2b81f300c015d7
