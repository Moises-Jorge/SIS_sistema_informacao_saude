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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento')->nullable();
            $table->char('sexo');
            $table->string('localidade')->nullable();//Pronvincia ou Municipio
            $table->string('morada')->nullable(); // Bairro
            $table->string('telefone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('numero_utilizador')->nullable();// Login
            $table->string('password');
            $table->integer('tipo_utilizador'); // "1" --> Admin;   "2" --> P_Clinico;   "3" --> Utente
            $table->string('nome_entidade_fin')->nullable(); //Fazer o devido tratamento depois
            $table->integer('num_user_entidade_fin')->nullable(); // Fazer o devido tratamento depois.
            //$table->integer('estado'); // Para saber se o utilizador ainda existe no sistema ou se ja foi eliminado
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
