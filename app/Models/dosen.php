<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ='dosen';
    protected $guarded = ['id','created_at','updated_at'];
}
