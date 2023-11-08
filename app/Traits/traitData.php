<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait traitData
{
    protected function solicitud($limit) {
        $query = "Select * from solicitudes_sep limit $limit";
        $data = DB::connection('condoc_eti')->select($query);
        return $data;
    }
}
