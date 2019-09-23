<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    protected $table = 'brand';
    protected $primaryKey = 'pid';
    public $timestamps = false;
}
