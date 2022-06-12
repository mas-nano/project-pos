<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function order_product_details()
    {
        return $this->hasMany(OrderProductDetail::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
