<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_doenca',
        'nome', // VERIFICAR ISSO DEPOIS PARA DAR TRATAMENTO
        'data',
        'reg__clinico__utente_id',
        'pessoal__clinico_id',
        'alergia_id'
    ];
}
