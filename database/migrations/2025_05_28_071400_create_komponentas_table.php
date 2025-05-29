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
        Schema::create('komponentas', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas');
            $table->string('apibudinimas');
            $table->decimal('kaina', 10, 2);
            $table->foreignId('kategorija_id')->constrained("kategorija");
            $table->foreignId('gamintojas_id')->constrained("gamintojas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komponentas');
    }
};
