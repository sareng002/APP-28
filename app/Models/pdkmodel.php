<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class pdkmodel extends Model
{
    
    protected $table="pdkmodels";
    protected $guard ="id";
    protected $dates=['tgl_lahir'];
}