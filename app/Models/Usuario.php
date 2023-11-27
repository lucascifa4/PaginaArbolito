<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected  $table = 'usuarios';

    protected $fillable = ['nombre', 'apellido', 'dni', 'mail', 'contraseña'];

    public function ventas()
    {
        return $this->hasmany(Venta::class);
    }
}
