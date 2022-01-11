<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pdkmodel extends Model
{
    use SoftDeletes;
    protected $table="pdkmodels";
    // protected $guard ="id";
    protected $fillable =['nik','kk','nama','jenis_kelamin','tempat_lahir','tgl_lahir','alamat','pekerjaan','agama','SHDK'];
    protected $dates=['tgl_lahir'];
    protected $hidden;
    
}