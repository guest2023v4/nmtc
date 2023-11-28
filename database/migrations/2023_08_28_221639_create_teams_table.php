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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->tinyInteger('type');
            $table->string('logo')->nullable()->default(null);
            $table->integer('capacity')->default(4);
            $table->boolean('is_all_paid')->default(false);
            $table->string('code')->nullable()->default(null);
            $table->unsignedBigInteger('team_leader_id')->nullable();


            // Define foreign key relationship
            $table->foreign('team_leader_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
