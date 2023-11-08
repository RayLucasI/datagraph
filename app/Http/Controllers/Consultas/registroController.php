<?php

namespace App\Http\Controllers\Consultas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\traitData;

class registroController extends Controller
{
    //
    use traitData;

    public function dataQ() {
        $limit = 10;
        $solicitudes = $this->solicitud($limit);  // traitData
        dd('Dentro de dataQ',$solicitudes);
        return ;
    }    
}
