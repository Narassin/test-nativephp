<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleSeries extends Model
{
    protected $fillable = ['series_name','prefix'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
