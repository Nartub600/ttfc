<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    public function currency () {
        $this->belongsTo(Currency::class);
    }
}
