<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("order", function (Blueprint $table) {
            $table->foreign("status_id", "fk_status_id")->references("id")->on("order_status");
        });
        Schema::table("order_status", function (Blueprint $table) {
            $table->foreign("order_id", "fk_order_id")->references("id")->on("order");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("order", function (Blueprint $table) {
            $table->dropForeign("fk_status_id");
        });
        Schema::table("order_status", function (Blueprint $table) {
            $table->dropForeign("fk_order_id");
        });
    }
};
