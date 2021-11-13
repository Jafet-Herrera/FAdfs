<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'd_modulo',
        'd_icono',
    ];

    
    public function aplicativos(){
    
        return $this->hasMany(Aplicativo::class);
    
    }
}
