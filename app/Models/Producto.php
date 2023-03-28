<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $fillable=['cod','nombre','nombre_corto','descripcion', 'PVP', 'familia'];
    use HasFactory;
    //nombre de tabla
    protected $table="producto";

    //Especificar la clave de la tabla
    protected $primaryKey="cod";
    protected $keyType="String";
    public $incrementing = false;

    //SI no tengo los campos create_at update_at
    public $timestamps = false;
}
