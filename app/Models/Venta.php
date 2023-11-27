<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected  $table = 'ventas';
     
    protected $fillable = ['usuario_id', 'producto_id', 'vendedor'];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }
    
    public function producto(){
        return $this->belongsTo(Producto::class);
    } 
}
