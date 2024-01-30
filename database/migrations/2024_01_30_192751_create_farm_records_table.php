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
        Schema::create('farm_records', function (Blueprint $table) {
            $table->id();
            $table->string('farmer_id');
            $table->string('farmer');
            $table->string('phone');
            $table->string('product_name');
            $table->string('quantity');
            $table->string('production_date');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_records');
    }
};
