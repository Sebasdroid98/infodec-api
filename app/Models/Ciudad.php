<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $hidden = ['pais_id', 'created_at', 'updated_at'];

    // Relación uno a muchos inversa
    public function pais(): BelongsTo
    {
        return $this->belongsTo('App\Models\Pais');
    }
}
