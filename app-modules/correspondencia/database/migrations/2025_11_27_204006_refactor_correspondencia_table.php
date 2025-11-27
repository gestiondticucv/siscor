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
            $table->foreignId('tipo_id')->constrained('tipos', 'id_tipo');
            $table->foreignId('categoria_id')->constrained('categorias', 'id_categoria');
            $table->foreignId('estatus_id')->constrained('estatus', 'id_estatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('correspondencia', function (Blueprint $table) {
            $table->dropForeign(['tipo_id']);
            $table->dropColumn('tipo_id');
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
            $table->dropForeign(['estatus_id']);
            $table->dropColumn('estatus_id');
        });
    }
};
