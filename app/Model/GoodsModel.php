<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{
    protected $table = 'goods';
    protected $primaryKey = 'g_id';
    public $timestamps = false;
}
