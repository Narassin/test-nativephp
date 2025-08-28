<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Inventory;

class Product extends Model
{
    protected $fillable = ['name','sku','price'];

    public function inventory ()
    {
        return $this->hasOne(Inventory::class);
    }

    public function salesItems ()
    {
        return $this->hasMany(SaleItem::class);
    }
}
