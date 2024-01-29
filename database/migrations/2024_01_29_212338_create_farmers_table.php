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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('registered_by');
            $table->string('registered_by_phone');
            $table->string('registered_by_name');
            $table->string('full_name');
            $table->string('national_id');
            $table->string('phone');
            $table->string('email');
            $table->string('location');
            $table->string('crop_type');
            $table->string('farming_experience');
            $table->string('farming_type');
            $table->string('gender');
            $table->string('farmSize');
            $table->string('cropsGrown');
            $table->string('status')->default('registered_farmer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
