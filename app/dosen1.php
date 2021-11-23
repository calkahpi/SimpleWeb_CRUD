<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen1 extends Model
{
    protected $table = "dosen1";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nip','nama','telepon','email'
    ];
}
