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
        $sols = $this->solicitud($limit);  // solicitud(): traitData;
        foreach ($sols as $sol) {
            $data = $this->plantel_carrera_orientacion($sol->num_cta,$sol->cve_carrera,$sol->nivel); // orientacion() traitData
            $titulados = $this->Siae($sol->num_cta);
        }  
        $html  = "<div>";
        $html .= "  <div class='grid grid-cols-2 gap-4 h-[100vh]'> ";
        $html .= "  <div class='card_g col-span-2'>header</div> ";
        $html .= "  <div class='card_g col-span-2'>nav</div> ";
        $html .= "  <div class='card_g'>section</div> ";
        $html .= "  <div class='card_g'>article</div> ";
        $html .= "  <div class='card_g row-[3/5] col-start-2'>side</div> ";
        $html .= "  <div class='card_g col-span-2'>footer</div> ";
        $html .= "/div>";
        return view('phpinfo/infor',compact('sols','html'));
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
        return $titulados;
    } 
}



