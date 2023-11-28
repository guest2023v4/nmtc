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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyInteger('date');
            $table->string('responsable_name')->nullable()->default(null);
            $table->string('room')->nullable()->default(null);
            $table->time('start_time')->nullable()->default(null);
            $table->time('end_time')->nullable()->default(null);
            $table->string('training_level')->nullable()->default(null);
            $table->integer('dedicated')->nullable()->default(null);
            $table->integer('type')->nullable()->default(null);
            $table->integer('capacity')->nullable()->default(null);
            $table->integer('attendance_nb')->nullable()->default(null);

            $table->unsignedBigInteger('organizer_id')->nullable()->default(null);
            $table->foreign('organizer_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
