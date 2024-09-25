<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;
use App\Models\Order;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_history', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignIdFor(Customer::class)->constrained("customer");
            $table->foreignIdFor(Order::class)->constrained("order");
            $table->integer("experience_id");
            $table->string("order_name");
            $table->string("order_food_name");
            $table->double("order_price");
            $table->integer("order_quantity");
            $table->double("order_total");
            $table->double("order_rating");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_history');
    }
};
