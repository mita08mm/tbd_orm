<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usern extends Model
{
    use HasFactory;
    public function sesions(): HasMany
    {
        return $this->hasMany(Session::class);
    }
     public function usernRols  (): HasMany
    {
        return $this->hasMany(Usern_Rol::class);
    }

}
