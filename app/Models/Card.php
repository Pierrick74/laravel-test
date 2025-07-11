<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    protected $fillable = [
        'name',
        'number',
        'extension',
        'photo',
        'PV',
        'type',
        // Ajoutez tous les champs que vous voulez pouvoir assigner en masse
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Products::class , 'card_id');
    }
}
