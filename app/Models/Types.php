<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
    ];

    public function tickests()
    {
        return $this->belongsTo('App\Models\Tickests', 'status_id');
    }
}
