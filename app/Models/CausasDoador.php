<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CausasDoador extends Model
{
    use HasFactory;

    protected $table = 'causas_doador'; // Nome da tabela

    protected $primaryKey = 'idCausa'; // Chave primária

    protected $fillable = [
        'idDoador',
        'causa'
    ];

    // Relacionamento com Doador
    public function doador()
    {
        return $this->belongsTo(Doador::class, 'idDoador');
    }
}
