<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignIdFor(Category::class)->constrained("category")->name("food_id");
            $table->string('f_name');
            $table->string('f_description');
            $table->integer("f_price");
            $table->double("f_rating");
            $table->longText("f_photo");
            $table->string("f_category");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
