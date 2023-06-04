<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ui extends Model
{
    use HasFactory;
    public function uis(): HasMany
    {
        return $this->hasMany(Funcion_Ui::class);
    }
}
