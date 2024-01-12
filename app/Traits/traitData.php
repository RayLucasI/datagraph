<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait traitData
{
    protected function solicitud($limit) {
        // Este query esta diseñado para traer los alumnos con más cédulas dentro de solicitudes_sep
        // Asi mismo, cada conjunto de datos tiene un orden aleatorio para variar la respuesta.
        // A su vez, el query solo nos devuelve los primeros "limit" registros.
        $query  = "Select * from (Select ss.num_cta,count(*) from solicitudes_sep ss group by num_cta having count(*)>2 order by rand() ) pp ";
        $query .= "join solicitudes_sep xx  on xx.num_cta = pp.num_cta limit $limit ";
        $data = DB::connection('condoc_eti')->select($query);
        return $data;
    }

    protected function orientacion($cuenta9,$carrera,$nivel){
        // Consulta la Orientacion de la carrera para un número de cuenta..
        $cuenta8 = substr($cuenta9,0,8);        
        $digito  = substr($cuenta9,-1);        
        $query  = 'SELECT dat_orientacion, dat_carrera ';
        $query .= 'from Datos ';
        $query .= "where ";
        $query .= "dat_ncta = '".$cuenta8."' and ";
        $query .= "dat_dig_ver = '".$digito."' and ";
        $query .= "dat_car_actual = '".$carrera."' and ";
        $query .= "dat_nivel = '".$nivel."' ";
        $data = DB::connection('sybase')->select($query);
        return $data;
    }

    protected function plantel_carrera_orientacion($cuenta9,$carrera,$nivel){
        // Consulta orientación, plantel, carrera SIAE
        $cuenta8 = substr($cuenta9,0,8);        
        $query   = "Select dat_ncta, dat_car_actual, dat_nivel, dat_orientacion, carrp_plan, carrp_carr  from Datos ";
        $query  .= "join dbo.Carrprog on dat_car_actual = carrp_cve and dat_nivel = carrp_nivel " ;
        $query  .= "where dat_ncta = '$cuenta8' and dat_car_actual='$carrera' and carrp_nivel = '$nivel'";
        $data    = DB::connection('sybase')->select($query);
        return $data;
    }
}
