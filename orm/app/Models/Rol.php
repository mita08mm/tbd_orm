<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    use HasFactory;
    
    public function usernrols(): HasMany
    {
        return $this->hasMany(Usern_Rol::class);
    }
    public function rolfuncions(): HasMany
    {
        return $this->hasMany(Rol_Funcion::class);
    }
}
