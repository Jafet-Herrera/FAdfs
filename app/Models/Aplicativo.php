<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicativo extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'modulo_id',
        'd_aplicativo',
        'd_icono',
        'd_ruta',
    ];

    //Relación N:1 de apps a modulos
    public function modulos(){

        return $this->belongsTo(modulo::class,'modulo_id');//
        /*
            * Si en tu la relación que consultes en tinker el resultado es null
            * debes añadir el campo FK que hace referencia a la tabla aplicativos->modulos 
        ? Aplicativos FK=>modulo_id   | modulos PK=>id
         */

    }

    public function permisoAplicativoRol(){
        return $this->hasMany(PermisosRolsAplicativo::class,'aplicativo_id');
    }
}
