<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacoesBancariasOng extends Model
{
    use HasFactory;

    protected $table = 'informacoes_bancarias_ong'; // Nome da tabela

    protected $primaryKey = 'idBanco'; // Chave primária

    protected $fillable = [
        'idOng',
        'nomeBanco',
        'numeroAgencia',
        'numeroConta',
        'tipoConta'
    ];

    // Relacionamento com Ong
    public function ong()
    {
        return $this->belongsTo(Ong::class, 'idOng');
    }
}
