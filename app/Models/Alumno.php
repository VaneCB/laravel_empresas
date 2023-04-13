<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable=['name','phone','email'];
    protected $hidden= ['created_at', 'updated_at'];
    use HasFactory;
}
