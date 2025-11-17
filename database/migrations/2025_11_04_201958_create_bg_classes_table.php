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
        Schema::create('bg_classes', function (Blueprint $table) {
            $table->id('clase_id');
            $table->foreignId('juego_fk')->nullable()->constrained(table: 'games', column: 'juego_id');
            $table->string('nombre', 255);
            $table->string('portada', 255);
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bg_classes');
    }
};
