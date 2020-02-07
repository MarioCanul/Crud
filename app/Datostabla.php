<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datostabla extends Model
{
 protected $guarded = [];
    public function reporteGastos(){
        return $this->belongsTo(ReporteGasto::class);
    }
}
