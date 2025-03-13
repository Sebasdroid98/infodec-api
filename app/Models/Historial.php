<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historial extends Model
{
    protected $table = 'historial';

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relación uno a muchos
    public function ciudad(): BelongsTo
    {
        return $this->belongsTo('App\Models\Ciudad');
    }
}
