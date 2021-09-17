<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\asistencia;
use App\Models\evaluacion;
use App\Models\detalle_evaluacion;


class usuario extends Model
{
    use HasFactory; 
    
    //relacion uno a muchos
    //public function asistencia(){
        //return $this->hasMany('asistencia::class');
//} 

    //relacion uno a muchos
    //public function evaluacion(){
        //return $this->hasMany('evaluacion::class');
//}

    //relacion uno a muchos
    //public function detalle_evaluacion(){
        //return $this->hasMany('detalle_evaluacion::class');
    //} 


}
