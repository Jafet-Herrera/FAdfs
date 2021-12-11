<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisosRolsAplicativo extends Model
{
    use HasFactory;

    public function permisoAplicativoRol(){
        return $this->belongsTo(Aplicativo::class);
    }
}
