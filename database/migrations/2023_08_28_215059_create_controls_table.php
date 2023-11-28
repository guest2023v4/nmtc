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
        Schema::create('controls', function (Blueprint $table) {
            $table->id();
            $table->boolean('registration')->default(true);
            $table->boolean('rooms')->default(false);
            $table->boolean('bus')->default(false);
            $table->boolean('teams')->default(false);
            $table->boolean('payment')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controls');
    }
};
