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
        Schema::create('reg__clinico__utentes', function (Blueprint $table) {
            $table->id();
            $table->string('grupo_sang');
            $table->string('status');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            //$table->foreignId('pessoal_clinico_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg__clinico__utentes');
    }
};
