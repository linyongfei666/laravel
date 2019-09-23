<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
