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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('pack_id')->after('transport')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('payagent_id')->after('pack_id')->nullable()->constrained('users', 'id')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('room_id')->after('payagent_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('team_id')->after('room_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('bus_id')->after('team_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('created_by')->after('bus_id')->nullable()->constrained('users', 'id')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['pack_id']);
            $table->dropForeign(['payagent_id']);
            $table->dropForeign(['room_id']);
            $table->dropForeign(['team_id']);
            $table->dropForeign(['bus_id']);
            $table->dropForeign(['created_by']);
            $table->dropColumn('pack_id');
            $table->dropColumn('payagent_id');
            $table->dropColumn('room_id');
            $table->dropColumn('team_id');
            $table->dropColumn('bus_id');
            $table->dropColumn('created_by');
        });
    }
};
