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
        Schema::create('komp_specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('komponentas_id')->references("id")->on("komponentas");
            $table->string('spec_pavad');
            $table->string('spec_verte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komp_specs');
    }
};
