<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'd_rol',
        'area_id',
        'created_at',
    ];

    //? Relación N:1 de rols a areas
    public function deptos(){
        return $this->belongsTo(Area::class,'area_id');
    }

    public function permisosRol(){
        return $this->hasMany(PermisosRolsAplicativo::class,'rol_id');

    }
}
