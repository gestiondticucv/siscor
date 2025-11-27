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
        Schema::table('correspondencia', function (Blueprint $table) {
            $table->string('asunto')->after('archivo');
            $table->dateTime('fecha_enviada');
            $table->dateTime('fecha_recibida')->nulleable()->after('fecha_enviada');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('correspondencia', function (Blueprint $table) {
            $table->dropColumn('asunto');
            $table->dropColumn('fecha_enviada');
            $table->dropColumn('fecha_recibida');
        });
    }
};
