<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    public $timestamps = false;
    function customer_data(): HasMany
    {
        return $this->hasMany(Customer_data::class);
    }
    function order_history(): HasMany
    {
        return $this->hasMany(Order_history::class);
    }
    function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
