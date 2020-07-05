<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeldatas extends Model
{
    protected $table = 'data_jamaah';
    protected $primaryKey = 'idjamaah';
    public $timestamps = false; 
}
