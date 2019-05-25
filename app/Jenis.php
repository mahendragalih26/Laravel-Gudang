<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'tb_jenis';
    public $timestamps = false;
    protected $fillable = ['nama_jenis'];
}
