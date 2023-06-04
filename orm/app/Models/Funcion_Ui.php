<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Funcion_Ui extends Model
{
    use HasFactory;
    public function funcion(): BelongsTo
    {
        return $this->belongsTo(Funcion::class);
    }
    public function ui(): BelongsTo
    {
        return $this->belongsTo(Ui::class);
    }
}
