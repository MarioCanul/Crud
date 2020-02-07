<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteGasto extends Model
{
    protected $guarded = [];
   public function gastos(){
       return $this->hasMany(Datostabla::class);
   }
}
