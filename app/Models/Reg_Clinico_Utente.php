<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg_Clinico_Utente extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo_sang',
        'status'
    ];
}
