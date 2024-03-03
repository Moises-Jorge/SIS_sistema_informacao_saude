<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recita extends Model
{
    use HasFactory;

    protected $fillable = [
        'pessoal__clinico_id',
        'user_id',
        'prescricao'
    ];
}
