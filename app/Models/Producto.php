<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected  $table = 'productos';

    protected $fillable = ['descripcion', 'precio', 'sucursal'];

    public function venta()
    {
        return $this->hasOne(Venta::class);
    }
}
