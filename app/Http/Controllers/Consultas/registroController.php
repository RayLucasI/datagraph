<?php

namespace App\Http\Controllers\Consultas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\traitData;
use App\Models\Web_Service;
use App\Http\Controllers\WebServices\WSController;

class registroController extends Controller
{
    //
    use traitData;

    public function dataQ() {
        // Integramos información.
        $limit = 4;
        $sols = $this->solicitud($limit);  // solicitud(): traitData
        foreach ($sols as $sol) {
            $data = $this->plantel_carrera_orientacion($sol->num_cta,$sol->cve_carrera,$sol->nivel); // orientacion() traitData
            dd('dataQ $data',$sols,$sol, $data);
            $this->Siae($sol->num_cta);}
        return ;
    }    

    public function Siae($num_cta) { // consultamos las carreras con status de titulación del alumno.
        // Consultamos los parámetros del WS (1='trayectoria')
        $paramsWS = Web_Service::find(1);
        $webservice = new WSController();
        // Consultamos el WS Siae del alumno
        $trayectoria = $webservice->ws_SIAE($paramsWS->nombre, $num_cta, $paramsWS->key);  
        // filtramos la trayectoria del alumno en las carreras que se ha titulado.
        $situaciones = (isset($trayectoria->situaciones))? collect($trayectoria->situaciones) : collect([]);                     
        $titulados = ($situaciones->count())? $situaciones->where('causa_fin',14): collect([]);      
        // Verificamos si existen registros de titulación
        //dd($situaciones,$titulados);
        if ($titulados->count()) { 
            dd('Con registros de titulación',$trayectoria,$titulados);            
        } else {
            dd('Sin registros de titulación',$trayectoria,$titulados);
        }
        return ;
    } 
}



