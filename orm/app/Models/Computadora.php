<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Computadora extends Model
{
    use HasFactory;
    public function prestamo(): HasOne
    {
        return $this->hasOne(Prestamo::class);
    }
    public function imagen(): BelongsTo
    {
        return $this->belongsTo(Imagen::class);
    }
}
