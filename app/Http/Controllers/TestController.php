<?php

namespace App\Http\Controllers;

use App\Model\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function addrecord()
    {
        for($i=0;$i<10000;$i++){
            $data = [
                'id' =>$i,
                'fname'=>Str::random(8),
                'lname'=>Str::random(8),
                'hired'=>date('Y-m-d',mt_rand(strtotime('2000-01-01'),strtotime('2019-01-01'))),
                'separated'=>date('Y-m-d',mt_rand(strtotime('2000-01-01'),strtotime('2019-01-01'))),
                'job_code'=>mt_rand(1,1000),
                'store_id'=>mt_rand(1,20)
            ];
            TestModel::insert($data);
        }
    }
}
