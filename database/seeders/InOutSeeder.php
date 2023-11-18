<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\InOut;

class InOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inout = new InOut();
        $inout->cveinout = '52'; $inout->inout = 'ingreso';
        $inout->motivo = 'Ingreso a bachillerato enp/cch (concurso de selección)';
        $inout->save();      
        $inout = new InOut();
        $inout->cveinout = '34'; $inout->inout = 'termino';
        $inout->motivo = 'Concluyo bachillerato (y realizó pase reglamentario)';
        $inout->save();     
        $inout = new InOut();     
        $inout->cveinout = '54'; $inout->inout = 'ingreso';
        $inout->motivo = 'Ingreso a licenciatura (pase reglamentario)';
        $inout->save();     
        $inout = new InOut();         
        $inout->cveinout = '20'; $inout->inout = 'termino';
        $inout->motivo = 'Afectado articulo 25 Ant. 20 (3 años sin movimiento en el registro escolar)';
        $inout->save();     
        $inout = new InOut();         
        $inout->cveinout = '59'; $inout->inout = 'ingreso';
        $inout->motivo = 'Ingreso a Licenciatura (carrera simultánea)';
        $inout->save();     
        $inout = new InOut();         
        $inout->cveinout = '38'; $inout->inout = 'termino';
        $inout->motivo = 'Término por cambio de plan de estudios por vigencia';  
        $inout = new InOut();         
        $inout->cveinout = '14'; $inout->inout = 'termino';
        $inout->motivo = 'Titulación';   
        $inout->save();                        
    }
}
