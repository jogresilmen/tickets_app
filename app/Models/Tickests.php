<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickests extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,
        'cola_id',
        'Duracion',
        'status_id',
        'marca',
        'tickets'

    ];

    public function types()
    {
        return $this->belongsTo('App\Models\Types', 'id');
    }
}
