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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_doenca'); // Alergica ou Nao Alergica
            $table->string('nome')->nullable(); // Nome da doenca se ela for Nao Alergica
            $table->date('data'); // Data em que a doenca foi diagnosticada
            $table->string('descricao');
            $table->foreignId('reg__clinico__utente_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pessoal__clinico_id')->constrained()->cascadeOnDelete();
            $table->foreignId('alergia_id')->constrained()->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosticos');
    }
};
