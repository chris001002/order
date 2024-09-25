<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menu";
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
