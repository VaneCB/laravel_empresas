<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //protected $fillable=['name','address','DNI'];
    protected $hidden= ['created_at', 'updated_at'];
    use HasFactory;
}
