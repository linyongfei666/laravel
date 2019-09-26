<?php

namespace App\Http\Controllers;

use App\Model\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class TestController extends Controller
{
    /**
     * 测试分区
     */
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

    public function reg()
    {
        $pass = 'admin123';
        $password = password_hash($pass,PASSWORD_BCRYPT);
        for($i=0;$i<1000;$i++){
            $redis_key = "str:count:userid";
            $uid = Redis::incr($redis_key);
            $data = [
                'uid'=>$uid,
                'username'=>Str::random(8),
                'password' => $password,
                'email' => Str::random(8)."@qq.com",
            ];
            $user_table = 'users_'.$uid%5;//计算分表
            $userInfo = DB::table($user_table)->insert($data);
            var_dump($userInfo);
        }
    }
}
