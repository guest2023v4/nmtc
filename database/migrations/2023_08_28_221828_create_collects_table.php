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
        Schema::create('collects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('payagent_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('set null');
            $table->timestamp('date');
            $table->unique(['admin_id','payagent_id','date']);
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collects');
    }
};
