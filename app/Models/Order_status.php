<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order_status extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "order_status";
    function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
}
