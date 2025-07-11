<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sellers extends Model
{
    protected $fillable = [
        'name',
        // Ajoutez tous les champs que vous voulez pouvoir assigner en masse
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Products::class , 'seller_id');
    }
}
