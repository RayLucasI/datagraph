<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Web_Service;

class WsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trayectoria = new Web_Service();
                $trayectoria->nombre = 'trayectoria';
                $trayectoria->descripcion = 'Consulta datos relacionados con la trayectoria de cada alumno';
                $trayectoria->key = 'He seguido la trayectoria en la que he creido y he confiado en mi mismo / Antonio Saura';
                $trayectoria->save();

        $identidad = new Web_Service();
                $identidad->nombre = 'identidad';
                $identidad->descripcion = 'Consulta datos relacionados con la información personal de cada alumno';
                $identidad->key = 'Nadie puede definir tu identidad, tu personalidad. Al fin y al cabo cada uno es responsable de quién y como es / Chinogizbo';
                $identidad->save();

        $avance = new Web_Service();
                $avance->nombre = 'avance';
                $avance->descripcion = 'Consulta datos relacioandos con el avance de cada alumno';
                $avance->key = 'Es mejor cojear por el camino que avanzar a grandes pasos fuera de él. Pues quien cojea en el camino, aunque avance poco, se acerca a la meta, mientras que quien va fuera de él, cuanto más corre, más se aleja. / San Agustin';
                $avance->save();                
    }
}
