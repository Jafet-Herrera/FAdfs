<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'd_area',        
    ];

    //? Relación 1:N de Areas a rols
    public function roles(){
        return $this->hasMany(Rol::class);
    }
}
