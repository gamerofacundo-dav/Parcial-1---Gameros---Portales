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
        Schema::create('games_have_platforms', function (Blueprint $table) {
            // Establezco clave foránea de juego, e indico a que tabla y columna me refiero.
            $table->foreignId('juego_fk')->constrained(table: 'games', column: 'juego_id');
            // Establezco clave foránea de plataforma, e indico a que tabla y columna me refiero.
            $table->foreignId('plataforma_fk')->constrained(table: 'platforms', column: 'plataforma_id');
            // Establezco clave primaria como combinación de ambas claves, ya que es una tabla pivot.
            $table->primary(['juego_fk', 'plataforma_fk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games_have_platforms');
    }
};
