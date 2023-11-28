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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('station');
            $table->time('hour');
            $table->integer('price');
            $table->integer('capacity');
            $table->integer('attendance_nb')->default(0);
            $table->unsignedBigInteger('responsable1_id')->nullable()->index();
            $table->unsignedBigInteger('responsable2_id')->nullable()->index();
            $table->foreign('responsable1_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('responsable2_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
