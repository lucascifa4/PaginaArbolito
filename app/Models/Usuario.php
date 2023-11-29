<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected  $table = 'usuarios';

    protected $fillable = ['mail', 'producto_id'];

    public function ventas()
    {
        return $this->belongsTo(Producto::class);
    }
}
