<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    protected $fillable = [
        'delivery_price',
        'price',
        // ajoute d'autres champs si besoin
    ];
    public $timestamps = false;
    public function seller():BelongsTo
    {
        return $this->belongsTo(Sellers::class , 'seller_id');
    }

    public function card():BelongsTo
    {
        return $this->belongsTo(Card::class , 'card_id');
    }
}
