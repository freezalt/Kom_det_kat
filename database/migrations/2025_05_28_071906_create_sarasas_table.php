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
        Schema::create('sarasas', function (Blueprint $table) {
            $table->id();
            $table->integer('kiekis');
            $table->foreignId('sandelys_id')->references("id")->on("sandelys");
            $table->foreignId('komponentas_id')->references("id")->on("komponentas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarasas');
    }
};
