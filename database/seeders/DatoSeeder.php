<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = ['cedula ciudadania','cedula extranjera','registro civil','tarjeta identidad'];
        $datos = ['masculino','femenino','otro'];

        foreach($datos as $dato){

            DB::table('datos')->insert([
                'nombre'=> $dato
            ]);
        }
    }
}
