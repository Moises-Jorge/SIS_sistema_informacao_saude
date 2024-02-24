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
            $table->integer('estado'); // Se ja foi atendido/não
            $table->text('descricao')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pessoal__clinico_id')->constrained()->cascadeOnDelete();
            $table->unsignedbigInteger('exame_id')->nullable();    // Colocando Esse campo como NULL
            $table->unsignedbigInteger('consulta_id')->nullable(); // Colocando Esse campo como NULL
            // $table->foreignId('especialidade_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            // Configurando as chaves estrangeiras
            $table->foreign('exame_id')->references('id')->on('exames')->onDelete('cascade');
            $table->foreign('consulta_id')->references('id')->on('consultas')->onDelete('cascade');
            // /Configurando as chaves estrangeiras
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
