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
        //
        Schema::create('virus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('danger_level');
            $table->string('affected_platform');
            $table->string('danger_level');
            $table->string('symptoms');
            $table->string('distribution_method');
            $table->string('prevention');
            $table->string('removal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
