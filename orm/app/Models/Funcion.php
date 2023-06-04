<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Funcion extends Model
{
    use HasFactory;
    public function rolfuncions(): HasMany
    {
        return $this->hasMany(Rol_Funcion::class);
    }
    public function funcionuis(): HasMany
    {
        return $this->hasMany(Funcion_Ui::class);
    }
}
