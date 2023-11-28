<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            ['descripcion' => 'camepera verde', 'precio' => 1000, 'cantidad' => 50],
            ['descripcion' => 'campera azul 1', 'precio' => 1000, 'cantidad' => 50],
            ['descripcion' => 'camiseta varon', 'precio' => 500, 'cantidad' => 50],
            ['descripcion' => 'camiseta mujer', 'precio' => 500, 'cantidad' => 50],
            
        ]);
    }
}
