<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    public function seller():BelongsTo
    {
        return $this->belongsTo(Sellers::class , 'seller_id');
    }

    public function cards():BelongsTo
    {
        return $this->belongsTo(Cards::class , 'card_id');
    }
}
