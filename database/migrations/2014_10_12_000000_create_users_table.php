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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cin')->nullable()->unique();
            $table->string('phone')->nullable(); #->default(null);
            $table->tinyInteger('role')->nullable()->default(6);
            $table->string('password');
            $table->tinyInteger('reg_step')->default(0);
            $table->date('birthday')->nullable();
            $table->string('city')->nullable();
            $table->char('gender')->nullable();
            $table->string('level_of_study')->nullable();
            $table->string('university')->nullable();
            $table->string('cin_front')->nullable();
            $table->string('cin_back')->nullable();
            $table->string('picture')->nullable();
            $table->string('bank_transfer')->nullable();
            $table->tinyInteger('pay_status_pack')->nullable();
            $table->tinyInteger('pay_status_bus')->nullable();
            $table->smallInteger('pay_amount_total')->nullable()->default(0);
            $table->boolean('pack_valid')->nullable();
            $table->string('madhmoun')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('cv')->nullable();
            $table->tinyInteger('transport')->nullable()->default(2);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

    {
        Schema::dropIfExists('users');
    }
};
