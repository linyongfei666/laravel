<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
    	$data=DB::table('goods')->get();
        return view('index/index',['data'=>$data]);
    }
=======
<<<<<<< HEAD

=======
    
>>>>>>> 43765c2d616c42d2f89f4251edaf75b4ce78037f
>>>>>>> 74063dcb3469543060103a7b49f038ed0d0b8326
}
