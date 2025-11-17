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
        Schema::create('buy_have_products', function (Blueprint $table) {
            $table->foreignId('compra_fk')->constrained(table: 'buys', column: 'compra_id');
            $table->foreignId('juego_fk')->constrained(table: 'games', column: 'juego_id');
            $table->primary(['compra_fk', 'juego_fk']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_have_products');
    }
};
