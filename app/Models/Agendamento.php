<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'hora',
        'user_id',
        'pessoal__clinico_id',
        'exame_id',
        'consulta_id',
        'especialidade_id'
    ];
}
