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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pessoal__clinico_id')->constrained()->cascadeOnDelete();
            $table->foreignId('exame_id')->constrained()->cascadeOnDelete();
            $table->foreignId('consulta_id')->constrained()->cascadeOnDelete();
            $table->foreignId('especialidade_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
