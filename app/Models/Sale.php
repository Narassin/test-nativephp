<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['shift_id','sale_items_id','total_amount','payment_method'];

    public function saleItems()
    {
        return $this->hasMany(SaleItem::class);
    }


    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
}
