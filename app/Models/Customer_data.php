<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Customer_data extends Model
{
    use HasFactory;
    protected $table = "customer_data";
    public $timestamps = false;
    function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
