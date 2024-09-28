<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    use HasFactory;

    protected $table = 'adm'; // Nome da tabela

    protected $primaryKey = 'idAdm'; // Chave primária

    protected $fillable = [
        'emailAdm',
        'senhaAdm'
    ];
}
