<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoal_Clinico extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_ordem',
        'user_id',
        'especialidade_id'
    ];
    
}
