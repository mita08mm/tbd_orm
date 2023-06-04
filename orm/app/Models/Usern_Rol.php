<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usern_Rol extends Model
{
    use HasFactory;
    public function usern(): BelongsTo
    {
        return $this->belongsTo(Usern::class);
    }
    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class);
    }
}
