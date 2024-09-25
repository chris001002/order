<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order_history extends Model
{
    use HasFactory;
    protected $table = 'order_history';
    function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
    function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
