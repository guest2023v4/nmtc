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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('num')->nullable()->default(null);
            $table->tinyInteger('gender')->nullable();
            $table->string('note')->nullable();
            $table->integer('capacity');
            $table->string('code')->nullable()->default(null);
            $table->tinyInteger('type');
            $table->boolean('is_all_paid')->nullable()->default(false);
            $table->integer('real_num')->nullable()->default(null);
            $table->boolean('have_key')->nullable()->default(null);
            $table->unsignedBigInteger('room_type_id')->nullable();
            $table->unsignedBigInteger('room_leader_id')->nullable();
            $table->unsignedBigInteger('user_have_key_id')->nullable()->default(null);
            // Define foreign key relationships
            $table->foreign('room_type_id')->references('id')->on('room_types')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('room_leader_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_have_key_id')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
