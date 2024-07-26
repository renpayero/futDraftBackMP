<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            array( 
                'nombre' =>  "Camiseta Oficial del Equipo",
                'precio' => 799.9,
                'imagen' => "indumentaria_01",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Camiseta de Entrenamiento",
                'precio' => 299.9,
                'imagen' => "indumentaria_02",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Chaqueta Deportiva",
                'precio' => 499.9,
                'imagen' => "indumentaria_03",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Camiseta de Fútbol",
                'precio' => 79.9,
                'imagen' => "indumentaria_04",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Balón de Fútbol Profesional",
                'precio' => 599.9,
                'imagen' => "balones_01",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Balón de Entrenamiento",
                'precio' => 399.9,
                'imagen' => "balones_02",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Mini Balón de Fútbol",
                'precio' => 199.9,
                'imagen' => "balones_03",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Balón de Fútbol Sala",
                'precio' => 299.9,
                'imagen' => "balones_04",
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Botines de Fútbol de Alta Gama",
                'precio' => 899.9,
                'imagen' => "botines_01",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Botines para Césped Artificial",
                'precio' => 699.9,
                'imagen' => "botines_02",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Botines para Niños",
                'precio' => 499.9,
                'imagen' => "botines_03",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Botines Clásicos de Cuero",
                'precio' => 799.9,
                'imagen' => "botines_04",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Guantes de Portero Profesionales",
                'precio' => 299.9,
                'imagen' => "guantes_01",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Guantes de Portero Junior",
                'precio' => 199.9,
                'imagen' => "guantes_02",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Guantes de Portero para Entrenamiento",
                'precio' => 249.9,
                'imagen' => "guantes_03",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Guantes de Portero Económicos",
                'precio' => 149.9,
                'imagen' => "guantes_04",
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Canilleras Profesionales",
                'precio' => 149.9,
                'imagen' => "canilleras_01",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Canilleras para Niños",
                'precio' => 99.9,
                'imagen' => "canilleras_02",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Canilleras Ligeras",
                'precio' => 129.9,
                'imagen' => "canilleras_03",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Canilleras con Tobillera",
                'precio' => 199.9,
                'imagen' => "canilleras_04",
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Mochila barcelona",
                'precio' => 49.9,
                'imagen' => "accesorios_01",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Red de Entrenamiento Profesional",
                'precio' => 299.9,
                'imagen' => "accesorios_02",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Guantes de accesorios",
                'precio' => 149.9,
                'imagen' => "accesorios_03",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array( 
                'nombre' =>  "Cinta de capitan",
                'precio' => 79.9,
                'imagen' => "accesorios_04",
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];

        DB::table('productos')->insert($datos);
        
    }
}
