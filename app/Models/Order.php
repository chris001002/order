<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";
    public $timestamps = false;
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function menu(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class);
    }
    public function order_status(): HasOne
    {
        return $this->hasOne(Order_status::class);
    }
    public function order_history(): HasOne
    {
        return $this->hasOne(Order_history::class);
    }
}
