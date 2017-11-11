<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function variations () {
        return $this->hasMany(Variation::class);
    }

    public function annualizedVolatility () {
        $variations = $this->variations()
            ->orderBy('date', 'desc')
            ->take(40)
            ->pluck('id');

        $query = Variation::whereIn('id', $variations)
            ->selectRaw('ROUND(SQRT(VARIANCE(amount) * 365), 2) as annualizedVolatility')
            ->first();

        return $query['annualizedVolatility'];
    }
}
